<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DOT kód</title>
</head>
<form class="mt-5 text-center" action="/fetch" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label class="block">
        DOT <input class="border-2 border-black-800 placeholder-slate-400 placeholder:text-slate-600 placeholder:text-lg h-12 ps-1 text-center" id="input" name="input" value="N5ADJU1R2213"/>
    </label>
    <button class="bg-black mt-3 text-white font-bold py-2 px-4 rounded" type="submit">Zjistit</button>
</form>
