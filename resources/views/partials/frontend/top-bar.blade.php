<div class="primary-bar">
    <div class="container mx-auto">
        <div class="flex flex-col items-center sm:flex-row sm:justify-between mx-4 py-2">
            <div class="text-white">
                <a href="mailto:{{$web_setting->email}}">{{$web_setting->email}}</a>
            </div>
            <div class="text-white">
                <a href="https://api.whatsapp.com/send?phone=971547312390{{$web_setting->contact}}" target="_blank">{{ '+'.$web_setting->contact }}</a>
            </div>
        </div>
    </div>
</div>
