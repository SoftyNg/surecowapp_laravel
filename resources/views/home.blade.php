<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Surecow</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
         rel="stylesheet" />
          <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- Loading main css file -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) ||
         file_exists(public_path('hot')))
          @vite(['resources/css/style.css', 'resources/css/costume-style.css',
          'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
                *,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
        <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/images/surecowtitle.png') }}" />
		
    </head>


    <body>
        <!-- Navbar -->
       <nav class="navbar-menu">
           <div class="navbar-container">
               <div class="menu-left">
                   <a href="">
                       <img src="{{ Vite::asset('resources/images/sure_cow_title.png') }}" alt="Company Name" class="img-logo">
                   </a>
                   <div class="navbar-nav-left" id="navbar-nav-left">
                       <!-- Home link -->
                       <span class="nav-item-menu">
                           <a class="" aria-current="page" href="#">Features</a>
                       </span>
                       <span class="nav-item-menu">
                           <a class="" aria-current="page" href="#">Pricing</a>
                       </span>
                       <span class="nav-item-menu">
                           <a class="" aria-current="page" href="#">About us</a>
                       </span>
                       <span class="nav-item-menu auth-menu">
                           <a href="{{url('/users')}}" class="btn-login">Login</a>
                       </span>
                       <span class="nav-item-menu auth-menu">
                           <a href="{{url('/register')}}" class="btn-signup">Sign up</a>
                       </span>
                   </div>
               </div>
               <div class="menu-right">
                   <div class="navbar-nav-right">
                       <span class="nav-item-menu">
                           <a href="{{ url('/users') }}" class="btn-login">Login</a>
                       </span>
                       <span class="nav-item-menu">
                           <a href="{{ url('/register')}}" class="btn-signup">Sign up</a>
                       </span>
                   </div>
                   <div class="burger" id="burger-menu">
                       <div class="bar"></div>
                       <div class="bar"></div>
                       <div class="bar"></div>
                   </div>
               </div>
           </div>

         </nav>




         <div id="loader">
            <img src="{{ Vite::asset('resources/images/sclogosmall.png') }}" alt="Company Logo"> <!-- Replace with the path to your logo -->
        </div>
        <!-- Hero Section -->
        <div class="content">
            <div class="hero-container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="hero-content">
                            <h1 class="font-weight-bold">Protect your Herd, </h1>
                            <h1 class="font-weight-bold">Protect your Livelihood </h1>
                            <p>
                                Running a farm means facing uncertainty every day. 
                                From severe weather to disease outbreaks, your livestock face real risks. 
                                That's why thousands of farmers trust us to protect their animals.
                            </p>
                            <p><a href="" class="btn-signup btn btn-md">Sign up</a></p>						
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="hero-img-container text-center">
                            <span class="bg-white">
                                <img src="{{ Vite::asset('resources/images/hero-section-icon.png') }}" alt="Hero Image" class="hero-section-icon">
                            </span>
                            <img src="{{ Vite::asset('resources/images/hero-image.png') }}" alt="Hero Image" 
                            class="img-hero img-fluid">
                        </div>
                    </div>
        
                </div>
            </div>
            <div class="img-design">
            </div>
            <div class="cover-container">
                <div class="cover-description">
                    <h1 class="font-weight-bold text-center">What We Cover </h1>
                    <p>
                        We provide an integrated eco-system for livestock managment, covering everything 
                        from healthcare to animal identification. Our  insurance policies offer comprehensive
                        protection for your investment
                    </p>
                </div>
                <div class="cover-content">
                    <div class="content">
                        <img src="{{ Vite::asset('resources/images/death.png') }}" alt="" class="mb-3 img-content">
                        <h6 class="font-weight-bold">Death from natural cause or accidents </h6>
                        <p>
                            Protect against unexpected losses, wether from age-related conditions or
                            unforeseen events. Our data shows thes account for 40 of all livestock claims.
                        </p>
                    </div>
                    <div class="content">
                        <img src="{{ Vite::asset('resources/images/theft.png') }}" alt="" class="mb-3 img-content">
                        <h6 class="font-weight-bold">Theft</h6>
                        <p>
                            Coverage for stolen animals with our advanced tracking integration. Quick verification
                            process means faster claim resolution when every minute counts.
                        </p>
                    </div>
                    <div class="content">
                        <img src="{{ Vite::asset('resources/images/disease.png') }}" alt="" class="mb-3 img-content">
                        <h6 class="font-weight-bold">Disease outbreaks </h6>
                        <p>
                            Protection against both isolated cases and herd-wide health events. Our predictive analytics
                             help identify risk patterns before they become critical.
                        </p>
                    </div>
                </div>
                <div class="cover-content">
                    <div class="content">
                        <img src="{{ Vite::asset('resources/images/van.png') }}" alt="" class="mb-3 img-content">
                        <h6 class="font-weight-bold">Transport accident </h6>
                        <p>
                            Coverage during loading, transit, and unloading. Our data shows transportation represents a
                            critical risk window requiring specialized protection.
                        </p>
                    </div>
                    <div class="content">
                        <img src="{{ Vite::asset('resources/images/health.png') }}" alt="" class="mb-3 img-content">
                        <h6 class="font-weight-bold">Emergency vet costs </h6>
                        <p>
                            Quick access to funds for unexpected veterinary expenses. No pre-approval needed for emergency
                            treatment up to your policy limit
                        </p>
                    </div>
                    <div class="content">
                        <img src="{{ Vite::asset('resources/images/cloud.png') }}" alt="" class="mb-3 img-content">
                        <h6 class="font-weight-bold">Weather related losses </h6>
                        <p>
                            From heat stress to winter storms, we analyze regional weather patterns to provide comprehensive
                            protection against climate-related risks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="insurance-container">
                <div class="insurance-description">
                    <h1 class="font-weight-bold text-center">Why Choose Our Livestock Insurance?</h1>
                </div>
                <div class="insurance-content-1">
                    <div class="content-1">
                        <img src="{{ Vite::asset('resources/images/hero-image (11).png') }}hero-image (11).png" alt="" class="mb-4 img-content-1 img-fluid">
                        <h4 class="font-weight-bold">Fast Claims, Fair Payment </h4>
                        <p>
                            We understand that every day matters when you're running a farm. Our claims process is streamlined,
                            with most claims settled within 72 hours
                        </p>				
                    </div>
                    <div class="content-2">				
                        <h4 class="font-weight-bold">Deep Industry Knowledge </h4>
                        <p>
                            Our expertise spans the entire livestock ecosystem – from animal health and wellness to cutting-edge
                            traceability systems. We've built our insurance solutions on real-world experience in the fields 
                            that matter most to your operation.
                        </p>	
                        <img src="{{ Vite::asset('resources/images/vet.png') }}" alt="" class="mt-4 img-content-2 img-fluid">			
                    </div>
        
                </div>
                <div class="insurance-content-2">
                    <img src="{{ Vite::asset('resources/images/animalData.png') }}" alt="" class="img-content-3 img-fluid">
                    <div class="content-3">
                        <h4 class="font-weight-bold">Data-Driven Protection </h4>
                        <p>
                            Our foundation in cattle analytics gives us unique insight into livestock risk patterns. We've analyzed
                            millions of data points across:
                        </p>
                        <ul>
                            <li>Health and mortality trends</li>
                            <li>Regional risk factors</li>
                            <li>Breed specific patterns</li>
                            <li>Seasonal Challenges</li>
                            <li>Management practices</li>
                        </ul>	
                        <p>
                            This deep understanding, combined with our flexible technology platform, allows us to offer smart protection
                            for all types of livestock operations – from cattle and sheep to specialty animals.
                        </p>
                    </div>
        
                </div>
            </div>
            <div class="testimony-container">
                <div class="testimony-description">
                    <h1 class="font-weight-bold text-center text-white">Real Farmers Real Protection?</h1>
                </div>
                <div class="testimony-content text-center">
                    <?php for($i = 0; $i <= 4; $i++): ?>
                    <span class="fa fa-star fa-rating font-weight-bold"></span>
                    <?php endfor ?>
                    <div class="farmer-testimony">
                        <p>
                            After losing 15 head of cattle to a flash flood, I didn't know if we'd recover. The claim was processed in two days,
                            and we were back on our feet within a week.
                        </p>
                    </div>
                    <div class="farmer-details"><span class="farmer-name">Ebiye Zighan</span>  <span class="farmer-address">Cattle rancher, Jega, Kebbi</span></div>
                </div>
            </div>
            <div class="coverage-container">
                <div class="coverage-description">
                    <h1 class="font-weight-bold text-center">Coverage Options</h1>
                </div>
                <div class="coverage-content-container">
                    <div class="coverage-content">
                        <div class="coverage text-center">
                            <label class="coverage-plan">Basic</label>
                            <h5 class="font-weight-bold">Basic Protection </h5>
                            <span class="coverage-price font-weight-bold">&#8358; 10,000</span>
                        </div>
                        <div class="coverage-list">
                            <p> <span class="fa fa-check"></span> Death by natural causes</p>
                            <p> <span class="fa fa-check"></span> Accidents and injury</p>
                            <p> <span class="fa fa-check"></span> Basic vet costs</p>
                            <p> <span class="fa fa-times"></span> Priority support</p>
                            <p> <span class="fa fa-times"></span> Death by natural causes</p>
                        </div>
                        <a href="" class="btn btn-block btn-try-now">Try now &#8594;</a>
                    </div>
                    <div class="coverage-content">
                        <div class="coverage text-center">
                            <label class="coverage-plan">Advanced</label>
                            <h5 class="font-weight-bold">Premium Coverage </h5>
                            <span class="coverage-price font-weight-bold">&#8358; 20,000</span>
                        </div>
                        <div class="coverage-list">
                            <p> <span class="fa fa-check"></span> Everything in basic</p>
                            <p> <span class="fa fa-check"></span> Disease outbreaks </p>
                            <p> <span class="fa fa-check"></span> Emergency vet care</p>
                            <p> <span class="fa fa-times"></span> Priority support</p>
                            <p> <span class="fa fa-times"></span> Death by natural causes</p>
                        </div>
                        <a href="" class="btn btn-block btn-try-now">Try now &#8594;</a>
                    </div>
                    <div class="coverage-content">
                        <div class="coverage text-center">
                            <label class="coverage-plan">Elite</label>
                            <h5 class="font-weight-bold"> Smart Protection </h5>
                            <span class="coverage-price font-weight-bold">custom quote</span>
                        </div>
                        <div class="coverage-list">
                            <p> <span class="fa fa-check"></span> Risk analysis based on your data</p>
                            <p> <span class="fa fa-check"></span> Customized coverage</p>
                            <p> <span class="fa fa-check"></span> Real-time monitoring integration</p>
                            <p> <span class="fa fa-check"></span> Priority support</p>
                            <p> <span class="fa fa-check"></span> Flexible multi-species coverage</p>
                        </div>
                        <a href="" class="btn btn-block btn-try-now">Try now &#8594;</a>
                    </div>
                </div>
            </div>	
            <div class="questions-container">
                <div class="question-description text-center">
                    <h1 class="font-weight-bold">Frequently Asked Questions</h1>
                    <p>
                        Here are the list of frequently asked questions below, you can contact us 
                        for futher questions when necessary. We will be provide answers to all your availabe questions.
                    </p>
                </div>
                <div class="frequently-ask-questions">
                    <div class="question question-1"><span>How quickly can you process my insurance claim?</span> <span class="fa fa-angle-down"></span></div>
                    <div class="question-answer question-answer-1">
                        <p>Answer to your question coming soon.</p>
                    </div> 
                    <div class="question question-2"> <span>How quickly can you process my insurance claim?</span> <span class="fa fa-angle-down"></span></div>
                    <div class="question-answer question-answer-2">
                        <p>Answer to your question coming soon..</p>
                    </div> 
                    <div class="question question-3"> <span>How quickly can you process my insurance claim?</span> <span class="fa fa-angle-down"></span></div>
                    <div class="question-answer question-answer-3">
                        <p>Answer to your question coming soon.</p>
                    </div> 
                    <div class="question question-4"> <span>How quickly can you process my insurance claim?</span> <span class="fa fa-angle-down"></span></div>
                    <div class="question-answer question-answer-4">
                        <p>Answer to your question coming soon.</p>
                    </div> 
                    <div class="question question-5"> <span>How quickly can you process my insurance claim?</span> <span class="fa fa-angle-down"></span></div>
                    <div class="question-answer question-answer-5">
                        <p>Answer to your question coming soon.</p>
                    </div> 
                </div>
            </div>
            <div class="img-contact-us-background">
                <div class="contact-us-container">
                        <div class="contact-us-form">
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="message_type">Why are you reaching out?</label>
                                            <select name="message_type" class="form-control form-input" id="message_type" placeholder="Please input" required >
                                                <option value="">Select Why you are reaching out</option>
                                                <option value="collaboration">Collaboration</option>
                                                <option value="feedback">Feedback</option>
                                                <option value="complain">Complain</option>
                                                <option value="newsletter">Newsletter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Fullname</label>
                                            <input type="text" name="fullname" class="form-control form-input" placeholder="Please input" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">								
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control form-input" placeholder="Please input">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone-number">Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control form-input" placeholder="Please input" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">								
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" name="location" class="form-control form-input" placeholder="Please input" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 feedback">
                                        <div class="form-group">
                                            <label for="rating">Rate us</label>
                                            <p>
                                                <?php for($i = 0; $i <= 4; $i++): ?>
                                                    <span class="fa fa-star font-weight-bold"></span>
                                                <?php endfor ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea  name="message" class="form-control form-input" placeholder="Enter your message" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="agreement" class="form-input"> I agree with Lookscout Privacy Policy
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" name="Submit" class="btn btn-contact" value="Submit">
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        <div class="contact-us-address">
                            <strong>Address</strong> <br>
                            Office Address, <br>
                            Ikeja, Lagos Nigeria <br>
                            <span class="fa fa-envelope-o"></span> Send an email <br>
                            support@livestock247.com<br>
                            Make a phone call, <br>
                            09062903550
                        </div>
                </div>
            </div>
        </div>
        <script>
            // Wait for the page to load
            window.onload = function() {
              setTimeout(function() {
                // Hide the loader
                document.getElementById('loader').style.display = 'none';
                // Show the main content
                document.getElementById('content').style.display = 'block';
              }, 5000); // 5000 milliseconds = 5 seconds
            };
        </script>







       <div class="footer">
           <div class="footer-container"> 
               <div class="footer-top">
                   <a href="">
                        <img src="/images/sure_cow_title.png" alt="Company Name" class="img-logo">
                   </a>
                   <div class="footer-menu">
                       <span class="nav-item-footer">
                           <a class="" aria-current="page" href="#">About us</a>
                       </span>
                       <span class="nav-item-footer">
                           <a class="" aria-current="page" href="#">Features</a>
                       </span>
                       <span class="nav-item-footer">
                           <a class="" aria-current="page" href="#">News</a>
                       </span>
                   </div>
                   <div class="footer-social-media">
                       <a href="https://www.facebook.com/livestock247ng"><i class="fa fa-facebook"></i></a> 
                       <a href="https://www.x.com/livestock247ng"><i class="fa fa-twitter"></i></a>
                       <a href="https://www.linkedin.com/in/livestock247/"><i class="fa fa-linkedin"></i></a>
                       <a href="https://www.youtube.com/channel/UCYSw3HTXyWbc1rFKhlifK8Q"><i class="fa fa-youtube"></i></a>
                       <a href="https://www.instagram.com/livestock247ng/"><i class="fa fa-instagram"></i></a>
                   </div>
               </div>
               <div class="footer-bottom">
                   <div class="footer-left">©<?= date('Y') ?> Livestock247. All rights reserved.</div>
                   <div class="footer-right">
                       <a href="">Privacy Policy</a> 
                       <a href="">Terms & Conditions</a>
                   </div>
               </div>
               
               <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
           </div>
       </div>
       <script>
           $(document).ready(function() {
               
               $('.feedback').hide();
               $(".question-answer-1").hide();
               $(".question-answer-2").hide();
               $(".question-answer-3").hide();
               $(".question-answer-4").hide();
               $(".question-answer-5").hide();
           
               $('.question-1').click(function () {
                   $('.question-answer-1').toggle();  
               });  
               $('.question-2').click(function () {
                   $('.question-answer-2').toggle(); 
               }); 
               $('.question-3').click(function () {
                   $('.question-answer-3').toggle(); 
               });
               $('.question-4').click(function () {
                   $('.question-answer-4').toggle(); 
               }); 
               $('.question-5').click(function () {
                   $('.question-answer-5').toggle();  
               }); 

               $('.burger').click(function () {
                   if($('.navbar-nav-left').css("display") == "none"){
                       $('.navbar-nav-left').css({"display":"flex"}); 
                   }else if($('.navbar-nav-left').css("display") == "flex"){
                       $('.navbar-nav-left').css({"display":"none"}); 
                   }

                   $('.burger').toggleClass("toggled");
               });  

               
               var body = document.getElementsByTagName("body");
               body[0].onresize = function(){
                   var widthScreen =window.innerWidth;
                   if($('.navbar-nav-left').css("display") == "flex"){
                       if(widthScreen > 992){
                       $('.burger').css({"display":"none"});
                       $('.navbar-nav-left').css({"display":"flex"}); 
                       $('.menu-left').css({"display":"flex"});
                       $('.menu-right').css({"display":"flex"});
                       $('.navbar-nav-right').css({"display":"flex"});
                       
                       }else if(widthScreen <="992"){
                       
                           $('.burger').css({"display":"flex"});
                           $('.navbar-nav-right').css({"display":"none"}); 
                           $('.auth-menu').show();  
                           $('.menu-right').css({"display":"flex"}); 
   
                       }
                   }else if($('.navbar-nav-left').css("display") == "none"){
                       if(widthScreen > 992){
                           $('.burger').css({"display":"none"});
                       $('.navbar-nav-left').css({"display":"flex"}); 
                       $('.menu-left').css({"display":"flex"});
                       $('.menu-right').css({"display":"flex"});
                       $('.navbar-nav-right').css({"display":"flex"});
                       
                       }else if(widthScreen <="992"){
                           $('.burger').css({"display":"block"});
                           $('.navbar-nav-right').css({"display":"block"}); 
                           $('.auth-menu').show();  
                           $('.menu-right').css({"display":"flex"}); 
   
                       }	
                   }

               }	
               

               $('#message_type').change(function () {
                   var message_type = $(this).val();  
                   if(message_type === "feedback"){
                       $('.feedback').show();
                   }else{
                       $('.feedback').hide();
                   }
                   
               }); 				
   
           });

       </script>
       <script src="/js/jquery-1.11.1.min.js"></script>
       <script src="/js/testimonial.js"></script>
       
       <script src="/js/plugins.js"></script>
       <script src="/js/app.js"></script>
       <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>		
   </body>          
</html>
