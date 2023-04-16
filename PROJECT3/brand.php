<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/head.php'); ?><!-- fungsi meta dan link source -->
    <title>brands - skinker</title>
</head>


<body style="margin-top: 60px; padding-top: 60px; background-color: #D4DDB7;">
    <header>
        <?php require_once('php/header.php'); ?>
    </header>


    <!-- ----------------------------------|ALL BRAND|------------------------------ -->
    <main class="container text-center">
        <h1>Brands</h1>
        <section class="row row-cols-4">
            <section class="col">
                <img class="img-brand" src="atribut/brand/cosrx.png" alt="cosrx">
                <a href="admin/cosrx.php" type="button" class="btn btn-round">Cosrx</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/dalba.png" alt="dalba">
                <a href="admin/dalba.php" type="button" class="btn btn-round">Dalba</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/estee lauder.png" alt="este lauder">
                <a href="admin/esteelauder.php" type="button" class="btn btn-round">Estee
                    Lauder</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/kiehls.png" alt="kiehls">
                <a href="admin/kiehls.php" type="button" class="btn btn-round">Keihl`s</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/la roche-posay.png" alt="roche-posay">
                <a href="admin/larocheposay.php" type="button" class="btn btn-round">La
                    Roche-posay</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/laneige.png" alt="laneige">
                <a href="admin/laneige.php" type="button" class="btn btn-round">Laneige</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/maraobadescu.png" alt="maraobadescu">
                <a href="admin/mariobadescu.php" type="button" class="btn btn-round">Maraobadescu</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/sensatia.png" alt="sensatia">
                <a href="admin/sensatia.php" type="button" class="btn btn-round">Sensatia</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/skii.png" alt="skii">
                <a href="admin/sk-ii.php" type="button" class="btn btn-round">SK-II</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/the body shop.png" alt="the body shop">
                <a href="admin/theBodyshop.php" type="button" class="btn btn-round">The
                    Body Shop</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/skintific.png" alt="skintific">
                <a href="admin/skintific.php" type="button" class="btn btn-round">Skintific</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/the ordinary.png" alt="the ordinary">
                <a href="admin/theOrdinary.php" type="button" class="btn btn-round">The
                    Ordinary</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/wardah.png" alt="wardah">
                <a href="admin/wardah.php" type="button" class="btn btn-round">Wardah
                    Beauty</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/yves rocher.png" alt="yves rocher">
                <a href="admin/yvesrocher.php" type="button" class="btn btn-round">yves
                    rocher</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/cerave.png" alt="cerave">
                <a href="admin/cerave.php" type="button" class="btn btn-round">Cerave</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/nivea.png" alt="nivea">
                <a href="admin/nivea.php" type="button" class="btn btn-round">nivea</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/innisfree.png" alt="innisfree">
                <a href="admin/innisfree.php" type="button" class="btn btn-round">innisfree</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/cetaphil.png" alt="cetaphil">
                <a href="admin/cetaphil.php" type="button" class="btn btn-round">Cetaphil</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/scarlett.png" alt="scarlett">
                <a href="admin/scarlett.php" type="button" class="btn btn-round">Scarlett</a>
            </section>
            <section class="col">
                <img class="img-brand" src="atribut/brand/elsheskin.png" alt="elsheskin">
                <a href="admin/elsheskin.php" type="button" class="btn btn-round">ElsheSkin</a>
            </section>
        </section>
    </main>


    <!-- ----------------------------------|FOOTER|------------------------------ -->
    <footer class="text-center text-lg-start border border-white mt-xl-5 pt-4" style="background-color: white;">
        <?php require_once('php/footer.php') ?>
        <?php require_once('php/cartAmount.php') ?>
    </footer>
</body>

</html>