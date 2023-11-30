<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
<section>

<div class="w-full min-h-screen flex justify-center items-center flex-col py-4 bg-white px-6">
    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_6nmazhqu.json" background="transparent" speed="1" class="md:w-[30%] w-[80%] sm:w-1/2 mx-auto" loop autoplay></lottie-player>
    <h2 class="font-fredoka md:text-xl text-center">Seprtinya halaman yang anda cari tidak ditemukan :(</h2>
    <a href="<?= base_url() ?>" class="inline-block text-blue-400 hover:text-blue-600 hover:underline">Kembali ke halaman utama</a>
</div>
</section>
</body>
</html>
