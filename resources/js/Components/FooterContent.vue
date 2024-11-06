<template>
    <footer class="px-20 py-16 w-full bg-blue-500 max-md:px-5 max-md:max-w-full">
      <div class="flex gap-5 max-md:flex-col">
        <section class="flex flex-col w-[76%] max-md:ml-0 max-md:w-full">
          <div class="flex flex-col w-full max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap gap-5 justify-between max-w-full text-5xl font-bold text-white w-[1085px] max-md:text-4xl">
              <h2>Kontak Kami</h2>
              <h2>Informasi</h2>
            </div>
            <div class="mt-12 max-md:mt-10 max-md:max-w-full">
              <div class="flex gap-5 max-md:flex-col">
                <div class="flex flex-col w-2/5 max-md:ml-0 max-md:w-full">
                  <div class="flex flex-col items-start w-full max-md:mt-10">
                    <div class="flex gap-10 self-stretch">
                      <div class="flex flex-col">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e8c14f7a9112c31ad23d5da4e2f159137406071b5b0dee5e993626c267e2b7ba?placeholderIfAbsent=true&apiKey=43173da6028646f7a188adcc787551eb" class="object-contain w-8 aspect-square" alt="Email icon" />
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/34ec9cadcf6cbf4a83b62b5b4fa0c1e605d3a5c742c7badad7d2019f83c57ea5?placeholderIfAbsent=true&apiKey=43173da6028646f7a188adcc787551eb" class="object-contain mt-8 w-8 aspect-square" alt="Location icon" />
                      </div>
                      <div class="flex flex-col grow shrink-0 my-auto text-2xl text-white whitespace-nowrap basis-0 w-fit">
                        <p>studysync</p>
                        <p class="mt-10">studysync@study.com</p>
                      </div>
                    </div>
                    <div class="flex gap-5 justify-between mt-8 max-w-full text-2xl text-white whitespace-nowrap w-[215px]">
                      <a href="https://www.instagram.com/studysync" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9ab9d558da96bf66e69d97ae914b70756764d8430a3f29cb582547d59a84c78b?placeholderIfAbsent=true&apiKey=43173da6028646f7a188adcc787551eb" class="object-contain shrink-0 w-8 aspect-square" alt="Instagram icon" />
                      </a>
                      <p class="my-auto">study.sync</p>
                    </div>
                    <div class="flex gap-5 justify-between mt-8 max-w-full text-2xl text-white w-[215px]">
                      <a href="https://www.youtube.com/studytube" target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e13d1506743c690786aaae5ec115baf4bd40038d6cc9631a8e9b5539f0566b1?placeholderIfAbsent=true&apiKey=43173da6028646f7a188adcc787551eb" class="object-contain shrink-0 w-8 aspect-square" alt="YouTube icon" />
                      </a>
                      <p class="my-auto">study tube</p>
                    </div>
                  </div>
                </div>
                <div class="flex flex-col ml-5 w-[32%] max-md:ml-0 max-md:w-full">
                  <div class="flex flex-col w-full max-md:mt-10">
                    <div class="flex gap-5 justify-between">
                      <div class="flex flex-col">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/96e905a346bfbf29c746022c5476816878983c5ed8f48fa31bea9621f84e780a?placeholderIfAbsent=true&apiKey=43173da6028646f7a188adcc787551eb" class="object-contain w-8 aspect-square" alt="Phone icon" />
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b6c2e4f591f7598c4ac1cf8dfd9ea8d5ba24dc0b886f21660c8ff2a18e77e934?placeholderIfAbsent=true&apiKey=43173da6028646f7a188adcc787551eb" class="object-contain mt-8 w-8 aspect-square" alt="Address icon" />
                      </div>
                      <div class="flex flex-col self-start text-2xl text-white">
                        <p>studysync</p>
                        <p class="mt-8">+62 888 888 888</p>
                      </div>
                    </div>
                    <address class="self-start mt-9 text-2xl text-white not-italic">
                      Hotel Asia lt. 21<br />Jln. Jomokerto Jomo Mojokerto
                    </address>
                  </div>
                </div>
                <nav class="flex flex-col ml-5 w-[28%] max-md:ml-0 max-md:w-full">
                  <ul class="flex flex-col text-2xl text-white max-md:mt-10 list-none p-0">
                    <li><a href="#" class="text-white no-underline">Kebijakan Privasi</a></li>
                    <li class="mt-9"><a href="#" class="text-white no-underline">Syarat & Ketentuan</a></li>
                    <li class="mt-9"><a href="#" class="text-white no-underline">Tentang kami</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="flex flex-col ml-5 w-[24%] max-md:ml-0 max-md:w-full">
          <div class="flex flex-col text-white max-md:mt-10">
            <h1 class="self-start text-5xl font-bold max-md:text-4xl">Studysync</h1>
            <p class="mt-12 text-2xl max-md:mt-10">
              Studysync merupakan website yang berfokus membantu pengguna mengetahui gaya belajar, diharapkan setelah mengetahui tipe gaya belajar pengguna dapat termudahkan dalam belajar
            </p>
          </div>
        </section>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'FooterComponent'
  }
  </script> 