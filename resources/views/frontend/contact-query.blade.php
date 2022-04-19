<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <div class="p-6 border-t border-gray-200 md:border-l px-12">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <div class="ml-3 text-lg text-gray-600 leading-7 font-semibold">Name: {{ $data['name'] }}</div>
        </div>
        <div class="ml-12 text-sm text-gray-600 leading-7 font-semibold">Contact: {{ $data['email'] }} or {{ $data['phone'] }}</div>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                {{ $data['message'] }}
            </div>
        </div>
    </div>
</body>
</html>