   <!-- Konversi -->
   <section class="konversi-section" id="konversi">
      <div class="container-konversi" data-aos="fade-up" data-aos-duration="1000">
        <div class="konversi-box"> 
          <h1 class="text-center m-5">Konversi Ukuran Data</h1>
          
          <form class="row gx-3 gy-2 align-items-center">
            <div class="col-12 col-sm-6 col-md-4 mb-3">
              <label for="inputAngka"> Masukkan Angka :</label>
              <input type="number" class="form-control" id="inputAngka" required>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
              <label  for="pilihUkuran">Ukuran Awal :</label>
              <select class="form-select" id="pilihUkuran" required>
                <option value="Pilih" selected>Pilih</option>
                <option value="bit">bit</option>
                <option value="Byte">Byte</option>
                <option value="KB">KB</option>
                <option value="MB">MB</option>
                <option value="GB">GB</option>
                <option value="TB">TB</option>
                <option value="PB">PB</option>
              </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
              <label for="akhirUkuran">Ukuran Tujuan</label required>
              <select class="form-select" id="akhirUkuran">
                <option value="Pilih" selected>Pilih</option>
                <option value="bit">bit</option>
                <option value="Byte">Byte</option>
                <option value="KB">KB</option>
                <option value="MB">MB</option>
                <option value="GB">GB</option>
                <option value="TB">TB</option>
                <option value="PB">PB</option>
              </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <button type="button" id="tombolKonversi">Konversi</button>
            </div>
            <div class="jawab col-12 col-sm-6 col-md-4 mb-aut mt-4">
              <h3>Hasilnya:</h3>
              <p id="hasil" class="border p-3 rounded mt-3 bg-light"></p>
            </div>
          </form>
        </div>
      </div>
    </section> 