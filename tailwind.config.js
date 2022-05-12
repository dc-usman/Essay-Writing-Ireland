module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        // "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                '3xl': '2000px',
                // => @media (min-width: 2000px) { ... }
            },
            backgroundImage: theme => ({
                'hero-pattern': "url('../../imgs/flag.png')",
                'hero-flag': "url('../../imgs/hero-flag.svg')",
                'flag-uae': "url('../../imgs/flag-ir.svg')",
                'tm': "url('../../imgs/bgtesti.svg')",
                's1': "url('../../imgs/s1.jpg')",
                's2': "url('../../imgs/s2.jpg')",
                'leftwaves': "url('../../imgs/sl.svg')",
                'rightwaves': "url('../../imgs/sr.svg')",
                'blue-waves': "url('../../imgs/blue-waves.svg')",
                // old images
                'hero-pattern': "url('../../imgs/hero-pattern.svg')",
                'wave-1': "url('../../imgs/wave-1.svg')",
                'wave-2': "url('../../imgs/wave-2.svg')",
                'top-wave': "url('../../imgs/top-wave.svg')",
                'bottom-wave': "url('../../imgs/bottom-wave.svg')",
                'animate-wave-1': "url('../../imgs/animate-wave-1.svg')",
                'bg-wave': "url('../../imgs/bg-wave.svg')",
            }),
            colors: {
                // 'primary-light': '#15CEF4',  //light blue
                // 'primary-dark': '#3859B5',   //dark blue
                // 'secondary': '#43464C',      //dark gray
                // 'secondary-dark': '#2C2E32', //dark dark gray

                'primary-light': '#CE2F38',  //dark pink  //#D79274
                'primary-dark':  '#463033',   //MAroon     //red #CE2F38
                'secondary':'#CE2F38' ,     //red  //mehndi //''//#D2BF79
                'secondary-dark': '#000', //Biscuiti color #D0CFA9 text-color
                //'primary-mehndi':'#D2BF79',     
                'color-gray':'#ABB2B5',         //amber-light #b45309 amber-dark //#fbbf24
                'color-gold':'#ffdb00',
                'color-gold-light':'#7a6a05',
                'color-maroon-light':'#895058',
                'color-primary-dark':'#9a5130',
                'color-footer':'#92400e',               //old footer color #361e21
                'slider-button-dark':'#ba0f0f',
                'slider-button-light':'#f05151',
            },  
            keyframes: {
                wiggle: {
                    '0%, 100%': { transform: 'rotate(-5deg)' },
                    '50%': { transform: 'rotate(5deg)' },
                }
            },
            animation: {
                'bounce': 'bounce 1s infinite',
                'spin-slow': 'spin 7s linear infinite',
                'wiggle': 'wiggle 3s ease-in-out infinite',
                'wiggle-slow': 'wiggle 1s ease-in-out infinite',
            }
        },
        plugins: [],
    }
}
