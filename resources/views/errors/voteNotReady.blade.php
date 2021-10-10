<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>Belum Waktu</title>
</head>
<body>
    
<div class="min-w-screen min-h-screen bg-blue-500 flex items-center justify-center px-5 py-5" x-data="beer()" x-init="start()">
    <div class="text-yellow-100">
        <h1 class="text-3xl text-center mb-3 font-extralight">Kapan Voting dimulai ?</h1>
        <div class="text-6xl text-center flex w-full items-center justify-center">
            <div class="w-24 mx-1 p-2 bg-white text-blue-500 rounded-lg">
                <div class="font-mono leading-none" x-text="days">00</div>
                <div class="font-mono uppercase text-sm leading-none">Hari</div>
            </div>
            <div class="w-24 mx-1 p-2 bg-white text-blue-500 rounded-lg">
                <div class="font-mono leading-none" x-text="hours">00</div>
                <div class="font-mono uppercase text-sm leading-none">Jam</div>
            </div>
            <div class="w-24 mx-1 p-2 bg-white text-blue-500 rounded-lg">
                <div class="font-mono leading-none" x-text="minutes">00</div>
                <div class="font-mono uppercase text-sm leading-none">Menit</div>
            </div>
            <div class="text-2xl mx-1 font-extralight">dan</div>
            <div class="w-24 mx-1 p-2 bg-white text-blue-500 rounded-lg">
                <div class="font-mono leading-none" x-text="seconds">00</div>
                <div class="font-mono uppercase text-sm leading-none">Detik</div>
                
            </div>

        </div>
        <p class="text-sm text-center mt-3">Pastikan anda siap memilih !</p>
    </div>
</div>

<script>
function beer() {
    return {
        seconds: '00',
        minutes: '00',
        hours: '00',
        days: '00',
        distance: 0,
        countdown: null,
        beerTime: new Date({{$startdate}}).getTime(),
        now: new Date().getTime(),
        start: function() {
            this.countdown = setInterval(() => {
                // Calculate time
                this.now = new Date().getTime();
                this.distance = this.beerTime - this.now;
                // Set Times
                this.days = this.padNum( Math.floor(this.distance / (1000*60*60*24)) );
                this.hours = this.padNum( Math.floor((this.distance % (1000*60*60*24)) / (1000*60*60)) );
                this.minutes = this.padNum( Math.floor((this.distance % (1000*60*60)) / (1000*60)) );
                this.seconds = this.padNum( Math.floor((this.distance % (1000*60)) / 1000) );
                // Stop
                if (this.distance < 0) {
                    clearInterval(this.countdown);
                    this.days = '00';
                    this.hours = '00';
                    this.minutes = '00';
                    this.seconds = '00';
                    location.reload();

                }
            },100);
        },
        padNum: function(num) {
            var zero = '';
            for (var i = 0; i < 2; i++) {
                zero += '0';
            }
            return (zero + num).slice(-2);
        }
    }
}
</script>

</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

</html>