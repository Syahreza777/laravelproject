@extends('layout.main')
@section('konten')

  <!--  CONTACT SECTION  -->
    <section id="contact" class="contact-section">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="text-color text-center" id="speciality"><b>Give us an opinion</b></p>
                <h2 class="mb-5 text-center font-weight-bold text-malam">Contact Us</h2>
                <form action="proses_form.php" method="post">
                    <div class="form-group">
                        <label for="nama">Name:</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Message:</label>
                        <textarea id="pesan" name="pesan" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-contact btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection