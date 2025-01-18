    function konversiUkuranData() {
        const inputAngka = parseFloat(document.getElementById("inputAngka").value);
        const pilihUkuran = document.getElementById("pilihUkuran").value;
        const akhirUkuran = document.getElementById("akhirUkuran").value;

        // Table konversi
        const nilai_data = {
            "bit": 1,
            "Byte": 8,
            "KB": 8 * 1024,
            "MB": 8 * 1024 * 1024,
            "GB": 8 * 1024 * 1024 * 1024,
            "TB": 8 * 1024 * 1024 * 1024 * 1024,
            "PB": 8 * 1024 * 1024 * 1024 * 1024 * 1024
        };

        // validasi input
        if (isNaN(inputAngka)) { // isNaN untuk mengecek apakah itu termasuk input angka
            document.getElementById("hasil").textContent = "Harap masukkan nilai angka dengan benar.";
        } else if (inputAngka <= 0){
            document.getElementById("hasil").textContent = "Nilai harus lebih besar dari nol";
        } else if (pilihUkuran === "Pilih") {
            document.getElementById("hasil").textContent = "Pilih ukuran data yang ingin dikonversi";
        } else if (akhirUkuran === "Pilih") {
            document.getElementById("hasil").textContent = "Pilih ukuran data hasil yang ingin ditampilkan";
        } else {

            // Konversi input untuk ke bit
            let nilai_bit = inputAngka * nilai_data [pilihUkuran];

            // Konversi input untuk ke byte
            let nilai_byte = nilai_bit / nilai_data [akhirUkuran];

            // Display the result
            document.getElementById("hasil").textContent = `${inputAngka} ${pilihUkuran} menghasilkan ${nilai_byte} ${akhirUkuran}`;
        }

        // Setelah klik konversi maka input akan ke reset, reset form menggunakan for loop
        resetForm();
    }
    // fungsi untuk mereset form menggunakan for loop
    function resetForm() { 
        
        // Dapatkan semua element input dan select di dalam form
        const form = document.querySelectorAll("#konversi input, #konversi select"); // querySelectorAll untuk mendapatkan semua elemen input dan select di dalam form dengan ID konversi
        
        // interasi dengan for loop untuk mereset nilainya 
        for (let i = 0; i < form.length; i++){  // length memastikan loop akan berjalan sebanyak jumlah elemen yang ada di dalam NodeList tersebut. 
            if (form[i].tagName == "INPUT") {   // tagName mengembalikan nama tag elemen dalam huruf besar atau sebaliknya
                form[i].value = "";     // mereset input field
            } else if (form[i].tagName == "SELECT") {
                form[i].value = "Pilih";    // mereset select field
            }
        }
        
        // menghapus hasil yang ditampilkan
        document.getElementById("hasil").textcontent = "";
    }

// Eventhandler untuk menjalankan fungsi ketika tombol diklik
document.getElementById("tombolKonversi").addEventListener("click", konversiUkuranData);

    // mengirim pesan ke email
    function sendMail() {
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('message').value;

        let mailto_link = "mailto:Konveru@gmail.com" +
            "?subject=Pesan dari " + encodeURIComponent(name) +// menentukan teks subjek dari email.
            "&body=Nama: " + encodeURIComponent(name) + // nama yang akan muncul di badan email.
            "%0AEmail: " + encodeURIComponent(email) + //untuk menambahkan baris baru dalam teks email agar lebih rapi.
            "%0APesan: " + encodeURIComponent(message);

        window.location.href = mailto_link; //mengalihkan browser ke URL mailto link
    }
