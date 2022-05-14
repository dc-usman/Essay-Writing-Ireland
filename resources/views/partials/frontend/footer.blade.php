<footer class=" bg-color-footer body-font">

    <div
        class="container lg:px-9 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">

        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 ">

            <div class="grid grid-cols-1 text-center md:text-left sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 pt-5 ">

                <div class="px-4 order-1">
                    <h4 class="text-2xl title-font font-medium text-white mb-3">Get to know us</h4>
                    <p class="my-2 mr-3 text-sm text-white">
                        All the information presented on the website is solely used for business purposes. Visitors are
                        not allowed to use any of the information for any personal use.
                    </p>

                    <a href="{{ route('order') }}"
                        class="inline-flex bg-gradient-to-r from-amber-400 to-amber-800 text-white border-0 py-2 px-6 my-4 hover:bg-cyan-600 rounded text-lg up-animate">
                        Order Now
                    </a>

                </div>

                <div class="px-4 md:order-4 lg:order-2">
                    <h4 class="text-2xl title-font font-medium text-white mb-3">Quick Links</h4>
                    <ul class="list-none mb-10">
                        <li class="py-1"><a href="{{ route('home') }}"
                                class="text-white hover:text-gray-300 text-md">Home</a></li>
                        <li class="py-1"><a href="{{ route('about') }}"
                                class="text-white hover:text-gray-300 text-md">About</a></li>
                        {{-- <li class="py-1"><a href="{{ route('services') }}"
                                class="text-white hover:text-gray-300 text-md">Services</a></li> --}}
                        <li class="py-1"><a href="{{ route('contact') }}"
                                class="text-white hover:text-gray-300 text-md">Contact</a></li>
                        <li class="py-1"><a href="{{ route('reviews') }}"
                                class="text-white hover:text-gray-300 text-md">Reviews</a></li>
                        <li class="py-1"><a href="{{ route('order') }}"
                                class="text-white hover:text-gray-300 text-md">Order Now</a></li>
                    </ul>
                </div>

                {{-- <div class="px-4 md:order-3 lg:order-3">
                    <h4 class="text-2xl title-font font-medium text-white mb-3">Services</h4>

                    <ul class="list-none mb-10">
                        @if (!empty($services))
                            @foreach ($services as $service)
                                <li class="py-1">
                                    <a href="{{ route('services.show', $service->slug) }}"
                                        class="text-white hover:text-gray-300 text-md">{{ $service->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div> --}}

                <div class="px-4 md:order-2 lg:order-4">
                    <h4 class="text-2xl title-font font-medium text-white mb-3">Contact Us</h4>
                    <nav class="list-none mb-10">
                        <li class="py-1">
                            <a href="mailto:{{ $web_setting->email }}" class="text-white hover:text-gray-300 text-md">
                                {{ $web_setting->email }}
                            </a>
                        </li>
                        {{-- <li class="py-1">
                            <a href="https://api.whatsapp.com/send?phone={{ $web_setting->contact }}" target="_blank" class="text-white hover:text-gray-300 text-md ">
                                {{ 'UAE- +'.$web_setting->contact }}
                            </a>
                        </li> --}}
                        <h4 class="text-2xl title-font font-medium text-white my-4">100% Secure Payment</h4>
                        <img class="mx-auto md:mx-0 lg:mx-0"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARkAAAAXCAMAAAAIs8vhAAAChVBMVEUAAAD29vYlVZbZeRJsISMiLWb60Q9rICJsISMmVZb29vbZexQYUKDvvRscWKA0YJsmVZYfVZshLWby8vMoMWImVpb39vbz9PUiLWXuyBPm5+jn6OkiLmcyWI/29vb18+719POkilxAMVjYkBi6yNw1TojdixqGgk/v7/DZehRsISPRbBsmVZclTItJZn4mVZbx8fHs7O3V2uDb2tv30g/o6eohLGVrISP4+fhrICIiLWb60Q/50A+7ydsiLGVsISMiLWb70Q739/fn6Orn6OklVpffrBZqHiG+MSbw8vX6+vr9/fv1zQ7/1w+/zN/ZfRbj5eUaTJHciC7////q6+5LcagNQYsGBQDR2ug7RXjsxg3d5e/16t42Yp4cJ2Ldpw8oMmqghgmqyLldf7DILh/psA2sscZri7e1wdaGn8O/LSLG0+b57+AxO3CPdwjM29WjttFIUYCSWlmRqcqzzcFfo35OQQS60ceBiKiGtZ+JT07t0tHswb6RlrOFQ0l1YQY+MwPY391hkNKfwrLx15dZYYynNzjD186kqMCcobqLka5japOZZWdbSwQra8TinZl7sZbdjonSbme5Jx6wlApmVQUvJwI9eMnYyciRvKWqf398JSWCbQe3zOmNr95zndeytsr26MXlrKakdnfqw16ZJiXJVB2/oAujvuR3lL3147XNtrWTwatsc5lxr4pFoG/ctg0ZFQBShs67mJjx03/ZgHlyeWG2ljTOrAx3fqFupoNbbnJvRGEdkFigjj/FRCzjsivANynGydcZX7/CqKbkuD58OTuxiIhFk2FdmF+9U1HHoSeUtYZSS3agc2piR2rinEyTO0XgkiuRkGzPaDncknHWhUlu3mmVAAAAP3RSTlMA/fz9/v7o7TH29vb+Jv4vdP3ipUnoyFjqSTzJNP7sNG8OIf79/XT+3tvX/uOY/siPRi0Zyr22onBTyayfc1N+0Y+PAAALJklEQVRYw52Zh18TZxjHA9W2tkib7kVbqm3tsHsv9fCAy0XINYOEECAJZBAySUggECCEHabsPWWDyhKkgNuqbdWOv6fPDcJBI8H+buR539xH8evvee55XzifvnoSFEMLAhgExvRcjODLzzicb9/ft2/fsQdrH+jrtzgczk/P7N+///iDBV/u/woefOfRE6HE/z6aE330wIHwEDpwlPyLn/o4nH6SG0mKG04PIigxD374NIfz4pGw3fVE2BNH3ozmPItscYCIjnegwV7hRL9/jAKzG5tjjz3O4bz13fFQ2n/8pec4B784FZLMKf5BzlPPo+HoroKvI58GMk9H0g9GRv22urr6hxWNRFFuRNTFxXffXbyIRtCPfvgU51khgoTtcoDChC98ynkVOxkAQUYCc0WFmSTEzFHRK5zHHwMwoTxDknntGcoWW0oltc0zFJmXH90DmUdpMqyDpcAUXBQZMg6PjFotj8/KyIiP91gjI8IXl9JiMzNj05Yucrnkw88DGYQk82CBa4DMiySZk+zMUc1MORumStieocnsyTMMGbZDZDVl02XprIn/QSaEWGQifyvPyMiKBwGc1YtLmYCFVGbsWlREOEMGFMw2rGAnGSgwk386OlQzs1MBz4AYMiwwcXG7kmHLOi2zugprjKypABn+gysMefJJMp8dTggtw48MGe4f8eAWRhlnDgEWWmCcpSgumwxCswimTc+wEIjaO/+cddyZ+WW2BHgExJBhg4kjrz2QMbqMqenWsqpp1txDeeaN13H48Xk4zuPx6AuBmxARYRBS03AKv6HJRFoBTEBZ6+sfxG4pcy2Ku40M2zvbFYzM77/fmZ399ZdfKnbxDGivnkmfLks9biyrqa6SpQbxTDJ9JPPJKzlw8alpPkMGGRi+e/euD35gi1h92CLWSoWGcbFCoY5BEIMWhngY/iZFhoveY4P54NChQ2lsNIsRATIYhiE8Ngz2TBgWlMzM7E0gY/6PZ+L2xZE6Rt+7uiCgFQiCkJFVl6XLysqmNZpgZJK7u1u6i5S1LUplbouyqLalGcLR2lqlsraoaHSUz5AJyx5ceuR+Ck8kloilaolYLlVICJSIkvNEWglBWDbJQJHJOp2VdZoBE3/mzJn1D9JADBnIpwiaDJajVqv1Upz0G4UD5/V4+7x9PRCADF7Df8iU3PjT8euvNyGbgniGVWC6RroCBYdE88BsmtbU1NQsu3QaYzAyxUlJSa3dcOYmtZqKkmqV8GFKSsotSko6p1QGyCC4Nj9xgKcj0Bygo0XGIZAnWDDcAOWXyOExZCLDPRm3Lq3fovCcvnTm0COJiYlpG8PX0mhtXLvIkJGjhJjEbNDppKIEOQ9LMHivnD9fV9cj7emRY31XethkqCYvpv3OCljmpoopyDAZqDMej+16vu2Yv9MzMlJ+qzMf5Lnu77Ll267bhjzXO/1ByKTKKl0uV3V/iStIneGfaEkCDICiCILu5iTTKIQkGXKeRQYT5kTk+xCtRCEFu4zz1CQiIbQleolYLdFCFtBkokYWUpoK3E1Nt9abmur//uvvv/765+7EgG94eOPatWvDPt+7NBmeQaIWShUKvRqSMkehxXNQfdt5hOe90uc939Y25m2T7yADElR03Flx2AU0GFCgn+kaGprzz01en2zPHzldfvVGfufkpG2o3TPX3u6fnBvyuzuDeSa1prKqsOpylTFoBW7OLSo2NRfnKk25uc2jtc0XimuVzS1FRaailtxmFhk8AZVclSqIcVwHHhFaUAkhBsvIFRJ9DmQXzpB5u7weq08ZbCwANboHB9319QUFvo1Y38DExMDEQMr8u1yaTI5ErdNKtAZLjpbQi8UGVN1Td76nt66tZ2ysr87b5sVpMjQUgQAQkSgEZoFIQEGhxoF+ZmhyrvOq27ZFpn1yaM49NNcu8F+9OjcUlAyorLqwatmYGpQMn9SJ5OSzSpNJOVpkMo12K0dbapubi0zdo6xsQjBIIj2hMAgtElQnxCxiQgL1xQImghQzsMi4C9yDC/UFg/VNg03uxsGCxoLhtI15X/aAb+LaxPwaRYaHgOkUCq1Or9aKCZ0WFaMJvVfa2tq8Y73evvN1fXW9QhYZEYbFVJSIRDF2JwDBRCBBBTAKeCbOcwMSx+/xD5WfHhmxddogm2w2v83m8V+33fB7Om07yKSmMh/pTAgyQsQiA2zI69TZ1tzi4m4oLqbW3Npz54pbdtQZDB8nFApCjSM5EsCDC0U5KKEWqQlxzriCsPCYOiO7NVgwWJBS4HY3ud0FjSmNje6m+olh38BA9sTwgC9lmM4mnkihsByWYuMSvUGNSnMIyTjires1GLDeK71Sb1tf3RiLTIy5VFWa5zRXOB15gpiS0gqz2ey0d5SaBQHPxDEiq29cEG2rwFYr9L4yeGOnW2tkqUYrHBAbXdNl2zzDtHVni1tbi7vPUWSKW3PP1Z5LStpOxkLWWotQpIXkSdDJMQtKaHUwJZGghD5MyHjGv7DQtLDQWF/f2NhU37TQuNC4/o/PNzw/75vfmJ+Y31ikyOAJEjWC45hWoh4nxNhhQiyX17XJoW71XfH21UEllm6RUZVMzcw6HA0zKw2zHXazs6GhoVSVN+VwqODbHf3MSFdc3O6rAyi8mqoqaVVhWbWmv7K/Bj5cVTWF/ZWFGmlVepBOj99d3GpSgm+g8CiLi02m2tzW5lFWNiFQZAixCJdDVpFWEaOQVWqJQq/XiyVqOU0GOmBoZ+CtfQmO0/HriffvJ5INDZzULfP2R7RnpPrDCHQvUr1eZ0lA9IQOl/eOQcoi8t7enjHD2FgYi8xMXoXdabfbnVMd5oqGBqddZS5xwr1iJxmqkzkWkoyrurBwuZK8V7usNZr+atdyYWGha7m6JmgPnHzhAlSbsxeSL5zlb4bJJ1hkMC28RXi4VIzqMT1KEKj6sAFeLjgCbhJLGTJQaDKgj8nKgvd2PLy2QYfOQjsDJwkoc217DwyNDE7+kVpkSzADNxaZEhU0MFBZIJHMMTFmyCFBCdSYGMHJnWSY7iVUD2yUGdNlVpnMKCMvK0hGyxh8dXDqVJCQJkM3piK5HP4tmFyO8RC5VCrHcDLG6anA6mCV3QNfItuZWEa0ZYKsDkRSjOl8/7s6gPJb2mF35tlVdruqo1SlgpLjdM502O1TpQCMTYYBEzKb0l2Xy6wanU5XqdNdXq7sv6zRaHT9l6Way9UPu25KoZWdnU1/wEWJipmp7DdpMlzUAwvtTV068wEbTOxixNaKkrVY4jEj1geLTEfpSp6jwdGggvsKlBuHU+VwOFZWbjpF28hQUPaUTf3V05UaTSV5TBdW9msKq2CoqepfDkqGT7+k2BGfJnPw5z3o/jvMWptEk7HpmYxyG/Bgg2Hvz+xcTLLpsOvMVGleXkeeqkKVl5dXaldNqSpgCEXYHPDMPtCu2zPb92fS05lbOtzhCoQPuT9z8L1H9qBNMiiX+0d5fAal+HtvR1y8HZtJKXbtIwCzSSaMfYTBeMcUReZLarfzpIDs9Og7JQF1ME2w6BXOW++DJ/a02wlkQughySQ+kri74AGaDCXu26v3ysvL73l+g+3OiKjFtaXbt5fWYLtzc7fzExwJJYrMi0foffHgor868hkn+us9eOZ9IBN9dD/pmd23yJ95jhP9w4nQAjLR7zwZ0jFPvneQ2iEPbJCHR0WFM1vkEREwIO+kDhw4Gs359EhYSL3+yeecz59lyAiCn6Se/Rx+d/DYHsiQW/jPPROaDPzuYE+m+SKaA6Z5MpTeA8uQpvnwwKa4cG0NtkYfPwX/d5+8/kQovfAG51+vaxDArQgB/gAAAABJRU5ErkJggg=="
                            alt="">
                    </nav>
                </div>

                <div class="px-4 md:order-2 lg:order-4">
                    <h4 class="text-2xl title-font font-medium text-white mb-4">FOLLOW US</h4>

                        <span class="inline-flex text-white">
                            <a href="{{ $web_setting->facebook_link ?? '#' }}" class="text-white  transition duration-300 flex">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5 bg-blue-700 rounded-full p-1 mr-2" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                                    </path>
                                </svg>
                                Facebook
                            </a>
                        </span>
                        <br>
                        <span class="inline-flex text-white">
                            <a href="{{ $web_setting->instagram_link ?? '#' }}" class=" text-white  transition duration-300 flex">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5 bg-pink-700 rounded-full p-1 mr-2"
                                    viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                                Instagram
                            </a>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black ">
        <div
            class="container mx-auto grid grid-cols-1 text-center px-5 md:text-left sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-2 py-4 ">
            <div>
                <p class="text-white sm:mt-2 text-sm text-center md:text-left">© Copyright 2022 All Rights
                    Reserved</p>
            </div>
            <div>
                <span class="text-center sm:ml-auto sm:mt-2 md:inline-flex md:justify-end">
                    <a href="{{ route('policy.terms-and-conditions') }}"
                        class="ml-3 text-white hover:text-primary-light ">
                        Terms & Conditions <b>|</b></a>
                    <a href="{{ route('policy.revision') }}" class="ml-3 text-white hover:text-primary-light ">
                        Revision Policy <b>|</b></a>
                    <a href="{{ route('policy.refund') }}" class="ml-3 text-white hover:text-primary-light ">
                        Refund Policy </a>
                </span>
            </div>
        </div>
    </div>

</footer>
{{-- Whatsapp icon --}}
<div class="fixed bottom-4 left-4 z-20 cursor-pointer ">
    <div class="h-12 w-12 bg-green-500 shadow-xl rounded-full">
        <a href="https://api.whatsapp.com/send?phone={{ $web_setting->contact }}" target="_blank" class="absolute bottom-[4px] left-[4px]  rounded-full cursor-pointer">
            <svg width="40px" height="40px" viewBox="0 0 1219.547 1225.016">
                <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z">
                </path>
                <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                    <stop id="s3_1_offset_1" offset="0" stop-color="#25D366"></stop>
                    <stop id="s3_1_offset_2" offset="1" stop-color="#25D366"></stop>
                </linearGradient>
                <path fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z">
                </path>
                <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image>
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z">
                </path>
                <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z">
                </path>
            </svg>
        </a>
    </div>
</div>
