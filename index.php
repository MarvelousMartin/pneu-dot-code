<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DOT kód</title>

    <script>
        const dropdownButton = document.querySelector("#dropdown");
        const dropdownList = document.querySelector("#dropdown + div.hidden");

        dropdownButton.addEventListener("click", () => {
            dropdownList.classList.toggle("hidden");
        });
    </script>
</head>
<body>
<form class="mt-5 text-center">
    <label class="block">
        <span class="my-3 block text-lg font-medium text-black-800">DOT kód Vaší pneu</span>
        <input class="border-2 border-black-800 placeholder-slate-400 placeholder:text-slate-600 placeholder:text-lg h-12 ps-1 text-center" name="input" placeholder="&nbsp;DOTN5ADJU1R2213"/>
        <p class="mt-2 text-slate-400 text-md">
            Obsahuje 8-13 čísel, s největší pravděpodobností 12.
        </p>
    </label>
</form>
<?php
$text = ltrim(strtoupper($_GET['input']), 'DOT');
if (strlen($text) == 12) {
    $arr = str_split($text, 4);
    $first = substr($arr[0], 0, 2);
    $second = substr($arr[0], 2, 2);
    $third = $arr[1];
    $fourth = substr($arr[2], 0, 2);
    $fifth = substr($arr[2], 2, 2);
}
else if (strlen($text) == 13) {
    $arr = str_split($text, 4);
    $first = substr($arr[0], 0, 2);
    $second = substr($arr[0], 2, 2);
    $third = $arr[1];
    $fourth = substr($arr[2], 0, 2);
    $fifth = substr($arr[2], 2, 2);
}

?>
<div class="flex justify-center text-center m-5 w-full mx-auto pt-12 w-3/4 text-xl font-bold">
    <div class="text-black px-2 py-3 mx-1 text-lg">
        <a>DOT</a>
    </div>
    <div class="w-1/12 text-white bg-green-600 rounded-lg px-2 py-3 mx-1 ring-1 ring-slate-900/5 shadow-xl">
        <a><?php echo $first ?></a>
    </div>
    <div class="w-1/12 text-white bg-red-600 rounded-lg px-2 py-3 mx-1 ring-1 ring-slate-900/5 shadow-xl">
        <a><?php echo $second ?></a>
    </div>
    <div class="w-1/6 text-white bg-yellow-600 rounded-lg px-2 py-3 mx-1 ring-1 ring-slate-900/5 shadow-xl">
        <a><?php echo $third ?></a>
    </div>
    <div class="w-1/12 text-white bg-blue-600 rounded-lg px-2 py-3 mx-1 ring-1 ring-slate-900/5 shadow-xl">
        <a><?php echo $fourth ?></a>
    </div>
    <div class="w-1/12 text-white bg-purple-700 rounded-lg px-2 py-3 mx-1 ring-1 ring-slate-900/5 shadow-xl">
        <a><?php echo $fifth ?></a>
    </div>
</div>
<div class="flex justify-between m-5 w-4/5 mx-auto pt-12">
    <div class="w-1/2 bg-blue-700 rounded-lg px-6 py-8 m-3 ring-1 ring-slate-900/5 shadow-xl">
        <div>
            <span class="inline-flex items-center justify-center p-2 bg-slate-300 rounded-md shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-patch-question" viewBox="0 0 16 16">
                  <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z"/>
                  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                  <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z"/>
                </svg>
            </span>
        </div>
        <h3 class="text-black mt-5 text-base font-medium tracking-tight font-bold text-2xl">Co je DOT kód</h3>
        <p class="text-white mt-2 text-sm">
            DOT je kód o délce 8 až 13 znaků (typicky 12), který najdete na boční straně každé pneumatiky. Lze z něj
            vyčíst určité informace, které se pojí s původem pneumatiky, a to včetně orientačního data její výroby,
            jež najdete v posledním čtyřčíslí DOT kódu
        </p>
    </div>
    <div class="w-1/4 bg-green-600 rounded-lg px-6 py-8 m-3 ring-1 ring-slate-900/5 shadow-xl" id="dropdown">
        <div>
            <span class="inline-flex items-center justify-center p-2 bg-slate-300 rounded-md shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg>
            </span>
        </div>
        <h3 class="text-black mt-5 text-base font-medium tracking-tight font-bold text-2xl">Kód výrobce</h3>
        <a class="text-white mt-2 text-3xl font-bold">
            <?php echo $first ?>
        </a>
        <a class="ml-5 text-white mt-2 text-3xl font-bold">
            Testovací firma
        </a>
    </div>
    <div class="w-1/4 bg-green-600 rounded-lg px-6 py-8 m-3 ring-1 ring-slate-900/5 shadow-xl" id="dropdown">
        <div>
            <span class="inline-flex items-center justify-center p-2 bg-slate-300 rounded-md shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg>
            </span>
        </div>
        <h3 class="text-black mt-5 text-base font-medium tracking-tight font-bold text-2xl">Rozměr pneumatiky</h3>
        <a class="text-white mt-2 text-3xl font-bold">
            <?php echo $second ?>
        </a>
        <a class="ml-5 text-white mt-2 text-3xl font-bold">
            Testovací firma
        </a>
    </div>
</div>
</body>
</html>