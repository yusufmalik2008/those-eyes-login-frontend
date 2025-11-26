<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Those Eyes - Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#e8308c",
              "background-light": "#f8f6f7",
              "background-dark": "#211119",
            },
            fontFamily: {
              "display": ["Plus Jakarta Sans", "Noto Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24;
            font-size: 24px;
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px 3px rgba(232, 48, 140, 0.4);
            transition: box-shadow 0.3s ease-in-out;
        }
        .bg-gradient-animation {
            background-size: 200% 200%;
            animation: gradient-animation 15s ease infinite;
        }
        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex min-h-screen w-full flex-col items-center justify-center overflow-hidden p-4 bg-gradient-to-br from-[#181114] via-[#211119] to-[#2b131e] bg-gradient-animation">
<div class="w-full max-w-md space-y-8 px-4 sm:px-0">
<div class="text-center">
<h1 class="text-white text-4xl font-bold tracking-tight">Those Eyes</h1>
<p class="mt-2 text-[#b89dab] text-lg font-normal">Log in to continue your journey</p>
</div>
<div class="space-y-6">
<div class="flex flex-col gap-4">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-white text-base font-medium leading-normal pb-2">Email</p>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#533c47] bg-[#261c21] h-14 placeholder:text-[#b89dab] p-[15px] text-base font-normal leading-normal" placeholder="Enter your email" value=""/>
</label>
<label class="flex flex-col min-w-40 flex-1">
<p class="text-white text-base font-medium leading-normal pb-2">Password</p>
<div class="relative flex w-full flex-1 items-stretch">
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#533c47] bg-[#261c21] h-14 placeholder:text-[#b89dab] p-[15px] pr-12 text-base font-normal leading-normal" placeholder="Enter your password" type="password" value=""/>
<div class="absolute inset-y-0 right-0 flex items-center pr-4 text-[#b89dab]">
<span class="material-symbols-outlined cursor-pointer">visibility_off</span>
</div>
</div>
</label>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<input class="h-5 w-5 rounded border-2 border-[#533c47] bg-transparent text-primary focus:ring-primary/50 checked:bg-primary checked:border-primary" id="remember-me" type="checkbox"/>
<label class="text-white text-base font-normal leading-normal" for="remember-me">Remember me</label>
</div>
<a class="text-base font-medium text-primary hover:underline" href="#">Forgot password?</a>
</div>
<button class="flex w-full items-center justify-center rounded-lg bg-primary px-6 py-4 text-base font-bold text-white shadow-lg transition-all btn-glow">
                    Enter
                </button>
<div class="relative flex items-center py-2">
<div class="flex-grow border-t border-[#533c47]"></div>
<span class="mx-4 flex-shrink text-sm font-medium text-[#b89dab]">or continue with</span>
<div class="flex-grow border-t border-[#533c47]"></div>
</div>
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
<button class="flex w-full items-center justify-center gap-3 rounded-lg border border-[#533c47] bg-[#261c21] px-6 py-3 text-base font-medium text-white transition-colors hover:bg-[#312329]">
<svg class="h-6 w-6" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M22.578 12.27c0-.79-.07-1.54-.2-2.27h-9.8v4.28h5.68c-.24 1.38-.97 2.56-2.09 3.35v2.77h3.57c2.08-1.92 3.28-4.73 3.28-8.13z" fill="#4285F4"></path>
<path d="M12.578 23c2.76 0 5.09-0.91 6.78-2.47l-3.57-2.77c-.92.62-2.1.98-3.41.98-2.6 0-4.8-1.75-5.59-4.1H3.498v2.85c1.65 3.27 4.9 5.51 8.88 5.51z" fill="#34A853"></path>
<path d="M7.078 14.1c-.2-.62-.31-1.27-.31-1.95s.11-1.33.31-1.95V7.35H3.498c-.66 1.31-1.05 2.78-1.05 4.35s.39 3.04 1.05 4.35l3.58-2.85z" fill="#FBBC05"></path>
<path d="M12.578 6.18c1.51 0 2.85.52 3.91 1.54l3.15-3.15C17.668 2.9 15.338 1.7 12.578 1.7c-3.98 0-7.23 2.24-8.88 5.51l3.58 2.85c.79-2.35 2.99-4.1 5.59-4.1z" fill="#EA4335"></path>
</svg>
                        Google
                    </button>
<button class="flex w-full items-center justify-center gap-3 rounded-lg border border-[#533c47] bg-[#261c21] px-6 py-3 text-base font-medium text-white transition-colors hover:bg-[#312329]">
<svg class="h-6 w-6" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M22 12.062C22 6.505 17.523 2 12 2S2 6.505 2 12.062c0 4.995 3.657 9.128 8.438 9.875v-7.018H8.05V12.062h2.388V9.75c0-2.36 1.41-3.666 3.568-3.666 1.025 0 1.903.076 2.16.11v2.464h-1.45c-1.144 0-1.367.542-1.367 1.336v1.766h2.772l-.36 2.857h-2.412v7.018C18.343 21.19 22 17.057 22 12.062z" fill="#1877F2"></path>
</svg>
                        Facebook
                    </button>
</div>
</div>
<p class="text-center text-base text-[#b89dab]">
                Don't have an account? <a class="font-medium text-primary hover:underline" href="#">Sign up</a>
</p>
</div>
</div>
</body></html>
