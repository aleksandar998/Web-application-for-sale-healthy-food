<form class="prodavnica" id="proizvodi">  <!-- otvaramo formu prodavnice a zatvaramo je pre footera -->
 <div class="row"><!-- otvoren red za thumnails -->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>GO g Sokovi</h3>
      <img src="img/carousel/gogsokovi.jpg" alt="...">
      <div class="caption">
        <p>Go g sokovi predstavljaju koncept potpuno prirodnih, ručno ceđenih sokova. Proces pasterizacije se vrši na
        temperaturi između 78°C i 81°C.</p>
        <p>Cena:<small><s>1000</s></small><strong> 250 dinara</strong></p>
        <label for="jedan"></label><input type="text" id="jedan" size="3" placeholder="0">
        <button class="button"><span>Dodaj u korpu </span></button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Humus</h3>
      <img src="img/carousel/humus.jpg" alt="...">
      <div class="caption">
        <p>Ukusni namaz od leblebija, koji čini sastavni deo mnogih srednjoistočnih kuhinja, tek je unazad nekoliko godina dobio na popularnosti u zapadnim zemljama. SAD u poslednje vreme beleži značajan rast potražnje za humusom i to zbog toga što je on prepoznat kao bezglutenska namirnica, zbog čega su se brojni Amerikanci, ali i Srbi, zainteresirali za ovaj zdravi namaz.</p>
        <p>Cena:<small><s>900</s></small><strong> 650 dinara</strong></p>
        <label for="dva"></label><input type="text" id="dva" size="3" placeholder="0">
        <button class="button"><span>Dodaj u korpu</span></button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Rice Cakes</h3>
      <img src="img/carousel/ricecakes.jpg" alt="...">
      <div class="caption">
        <p>RICE cakes su bogati vlaknima, ugljenim hidratima i fitofenolima, imaju antioksidaciono delovanje, regulišu hormonalni status, stimuliraju enzime i imaju antibakterijski efekat. Zbog toga, su zdrava užina, koji u sebi ne sadrži rafinirane masti, holesterola i imaju nisku kalorijsku vrednost</p>
        <p>Cena:<small><s>1100</s></small><strong>700 dinara</strong></p>
        <label for="tri"></label><input type="text" id="tri" size="3" placeholder="0">
        <button class="button"><span>Dodaj u korpu </span></button>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div id="detalji">
      <h2>Detalji narudžbenice:</h2>  
      <div class="grad"> 
        <label for="s-grad">Izaberite grad za isporuku:</label>
        <select id="s-grad">
          <option value="">-Izaberite-</option>
          <option value="BG">Beograd</option>
          <option value="NS">Novi Sad</option>
          <option value="NI">Niš</option>
          <option value="KG">Kragujevac</option>
          <option value="DR">Drugo (20% pdv)</option>
        </select>
      </div> 
      <div class="grupa metoda"> 
        <label for="r-metod-preuzimanje">Način isporuke:</label><br>
        <input type="radio" value="preuzimanje" name="r_method" id="r-metod-preuzimanje" checked><label for="r-metod-preuzimanje">Lično preuzimanje (besplatno)</label><br> 
        <input type="radio" value="kompanijski" name="r_method" id="r-metod-kompanijski"><label for="r-metod-kompanijski">Kompanijski prevoz (200 dinara po proizvodu)</label><br>
        <input type="radio" value="postexpres" name="r_method" id="r-metod-postexpres"><label for="r-metod-postexpres">Post expres (100 dinara po proizvodu)</label>
      </div>
      <div class="grupa izracunavanja"> 
        <p> 
          <label for="btn-izracunaj">Izračunaj ukupno: </label>
          <input type="submit" value="Ukupan iznos" id="btn-izracunaj">
          <input type="text" id="txt-izracunaj" placeholder="0.00 dinara">
        </p>
        <div id="rezultati">
        </div> 
      </div>
    </div>
  </div>
</div>
</form>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 10px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>