<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Mailing</title>
</head>

<body>
    <div class="row mb-3">
        <!--  MAP Block Start -->
        <div class="container-fluid mt-3">
            <div class="col-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1439134591315!2d106.92233691449226!3d-6.111318661635951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a200bfdc75913%3A0x6cb5167b44813b00!2sSMA%20Negeri%2073%20Jakarta!5e0!3m2!1sid!2sid!4v1580986793502!5m2!1sid!2sid" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <!--  MAP Block End -->
            <!-- Address Block Start -->
            <div class="col-4">
                <h3>Address</h3>
                <p>SMAN 73 Jakarta
                    Jl. Ardodedali No.6-7, RT.8/RW.2, Semper Tim
                    Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14130
                    website : sman73jkt.sch.id
                    Telp : (021) 4401622</p>
            </div>
            <!-- Address Block End -->
        </div>

        <!-- Message Form Start -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center">Contact Us</h2>
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('mailing/send') ?>" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="84" rows="5" placeholder="Write your message" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
        <!-- Message Form End -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>