const myCarousel = new Carousel(document.querySelector("#myCarousel"), {
  slides: [
    {
      html: '<div class="atsiliepimas"><div class="nuotrauka"><img src="https://i.etsystatic.com/iap/afe71e/3490049971/iap_640x640.3490049971_o4gwss5m.jpg?version=0" width="150"/></div><div class="atsiliepimo-blokas"><div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><div class="tekstas"><em>&quot;The detail, design, and craftsmanship are remarkable. Exactly as described. We love it!&quot;</em></div><div class="vardas"><b>Russ</b></div></div></div>',
    },
    {
      html: '<div class="atsiliepimas"><div class="nuotrauka"><img src="../app/images/dumedeliai.jpg" width="150"/></div><div class="atsiliepimo-blokas"><div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><div class="tekstas"><em>&quot;Recommending! Great art and artist. Ordered couple of &quot;Tree of live&quot;. Satisfied in a big way. Thank you!&quot;</em></div><div class="vardas"><b>Austėja</b></div></div></div>',
    },
    {
      html: '<div class="atsiliepimas"><div class="nuotrauka"><img src="../app/images/snaiges.jpg" width="150"/></div><div class="atsiliepimo-blokas"><div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><div class="tekstas"><em>&quot;Tik geriausi atsiliepimai. Snaigės ne tik gražios ir kokybiškos, bet ir labai estetiškai supakuotos. Pačios jaukiausios emocijos prieš šventes.&quot;</em></div><div class="vardas"><b>Donata</b></div></div></div>',
    },
    {
      html: '<div class="atsiliepimas"><div class="nuotrauka"><img src="https://i.etsystatic.com/iap/506f8d/2763961053/iap_640x640.2763961053_r6cj4h19.jpg?version=0" width="150"/></div><div class="atsiliepimo-blokas"><div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><div class="tekstas"><em>&quot;Kiekvienas mazgelis nudžiugino ir puošia mūsų eglutę. Ačiū už puikų aptarnavimą bei Jūsų rankomis sukurtą jaukumą mūsų namams.&quot;</em></div><div class="vardas"><b>Justina</b></div></div></div>',
    },
  ],
});
