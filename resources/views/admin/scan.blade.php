@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <h1 class="display-4 text-center mb-4">Сканирование QR-кода через камеру</h1>
        <div class="row">
            <div class="col-md-6">
                <video width="100%" id="qr-video" playsinline></video>
            </div>
            <div class="col-md-6">
                <div id="ingredient-title" class="mt-3"></div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jsQR.js')}}"></script>
    <script>
        const video = document.getElementById('qr-video');
        let scanned = false;

        navigator.mediaDevices.getUserMedia({ video: true })
            .then((stream) => {
                video.srcObject = stream;
                video.setAttribute('playsinline', true);
                video.play();
                requestAnimationFrame(tick);
            });

        function tick() {
            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);

                if (code && !scanned) {
                    scanned = true;
                    fetch('/find-ingredient/' + code.data)
                        .then(response => response.text())
                        .then(data => {
                            const ingredientTitleDiv = document.getElementById('ingredient-title');
                            if (ingredientTitleDiv) {
                                ingredientTitleDiv.innerText = data;
                                // Перенаправление на другую страницу
                                window.location.href = '/qr';
                            }
                        });
                }
            }

            requestAnimationFrame(tick);
        }
    </script>
@endsection
