// $(document).ready(function () {
    $.fn.snapshootCapture = function() {
        var attrPhoto = $("#yii2-snap-shoot-photo").attr('src');
        // $("#yii2-snap-shoot-show").on('click', function () {
            $("#yii2-snap-shoot-photo").height($("#yii2-snap-shoot-video").height());
            $('#yii2-snap-shoot-ok').attr('disabled', 'disabled');
            $("#yii2-snap-shoot-video").attr('src', '');
            $("#yii2-snap-shoot-photo").attr('src', attrPhoto);
            //Работа с WEB камерой
            (function () {
                var video = document.getElementById('yii2-snap-shoot-video'),
                    canvas = document.getElementById('yii2-snap-shoot-canvas'),
                    context = canvas.getContext('2d'),
                    photo = document.getElementById('yii2-snap-shoot-photo'),
                    vendorUrl = window.URL || window.webkitURL;
                navigator.getUserMedia = navigator.getUserMedia ||
                    navigator.webkitGetUserMedia ||
                    navigator.mozGetUserMedia;
                if (navigator.getUserMedia) {
                    navigator.getUserMedia({audio: false, video: {width: 1280, height: 720}},
                        function (stream) {
                            var video = document.querySelector('video');
                            video.srcObject = stream;
                            video.onloadedmetadata = function (e) {
                                video.play();
                            };
                            $('#yii2-snap-shoot-capture').removeAttr('disabled');
                            $('#yii2-snap-shoot-error').hide();
                            $('#yii2-snap-shoot-capture').on('click', function () {
                                context.drawImage(video, 0, 0, $("#yii2-snap-shoot-video").width(), $("#yii2-snap-shoot-video").height());
                                photo.setAttribute('src', canvas.toDataURL('image/png'));
                                $('#yii2-snap-shoot-ok').removeAttr('disabled');
                            });
                            $('#yii2-snap-shoot-ok').on('click', function (e) {
                                e.preventDefault();
                                stream.getTracks().forEach(function (track) {
                                    track.stop();
                                });
                            });
                            $('#yii2-snap-shoot-cancel').on('click', function (e) {
                                e.preventDefault();
                                stream.getTracks().forEach(function (track) {
                                    track.stop();
                                });
                                $('#'+modalId).addClass('hidden');
                            });
                            $('.modal').on('hide.bs.modal', function (e) {
                                stream.getTracks().forEach(function(track) { track.stop(); });
                            });
                        },
                        function (error) { //Если ошибка
                            $('#yii2-snap-shoot-capture').attr('disabled', 'disabled');
                            $('#yii2-snap-shoot-error').show();
                        }
                    );
                } else {
                    console.log("getUserMedia not supported");
                }
            })();
        // });
    }
// });
