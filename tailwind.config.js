/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'media',
    theme: {
        fontFamily: {
            'display': 'Red Hat Display, sans-serif',
            'body': 'Inter, sans-serif',
        },
        extend: {
            colors: {
                light: {
                    1: '#FFFFFF',
                    2: '#F9FAFE',
                    3: '#FAFAFD',
                },
                dark: {
                    1: '#16171C',
                    2: '#494C57',
                    3: '#171717',
                    4: '#202020',
                    5: '#151515',
                    6: '#0F0F0F'
                },
                subtleGrey: {
                    1: '#F8F8FC',
                    2: '#989DB1',
                    3: '#8D8F98',
                    4: '#9A9A9A',
                    5: '#CED2DE'
                },
                subtleBlue: {
                    1: '#34B3FF',
                    2: '#518CFF',
                    3: '#4376DB',
                    4: '#CCE3FF',
                },
                subtleGreen: '#00B67A',
                lemonYellow: '#F2FF57',
                deepGrey: '#2E2E2E',
                navy: {
                    1: '#313E60',
                    2: '#1C3055'
                },
            },
            fontSize: {
                px20: '20px',
                px32: '32px'
            },
            spacing: {
                13: '52px',
                18: '72px',
                360: '360px',
                465: '465px'
            },
            zIndex: {
                min10: '-10'
            },
            boxShadow: {
                formShadow: '-32px 48px 60px rgba(22, 23, 28, 0.04)'
            },
            backgroundImage: {
                'dropdownArrowLight': "url('/../assets/icons/dropdownArrowLight.svg')",
                'dropdownArrowDark': "url('/../assets/icons/dropdownArrowDark.svg')",
            },
            backgroundSize: {
                '24px': '24px',
                '16px': '16px'
            },
            backgroundPosition: {
                'selectArrowPosition': 'calc(100% - 20px) center'
            }
        },
    },
    variants: {
        extend: {
            display: ['dark'],
        },
    },
    plugins: [],
}
