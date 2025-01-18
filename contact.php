    <!-- Contact -->
    <section class="contact-section">
      <div class="container mt-5">
        <h2 class="text-center fw-bold mb-5 fs-1">Contact Us</h2>
        <form id="emailform" onsubmit="sendMail(); return false;">
            <div class="d-flex justify-content-center gap-5 ">
            <div class="col-md-12 ">
              <label for="name" class="form-label">Nama anda :</label>
              <input type="text" class="form-control" id="name" placeholder="Enter nama" required>
            </div>
   
            <div class="col-md-12 ">
              <label for="email" class="form-label">Alamat Email :</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            </div>

          <div class="col-10">
            <label for="message" class="form-label">Pesan :</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Ketik pesan anda.." required></textarea>
          </div>
          
          <div class="row mt-3">
          <div class="col-md-12 text-center">
          <button type="submit" class="btn text-white mb-5" style="background-color: #3f6fd6;">Kirim Pesan</button>
          </div>
          </div>
        </form>
      </div>
    </section>