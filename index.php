<?php include 'header.php'; ?>
<br/>

<div class="container">

<div class="row text-center">
    <div class="col-xs-12 ">
    
    </div>
</div></div>

<section id="banner">
    <div class="content">
        <header>
            <h1 title="Hi">"Merhaba",<br />
            from Earth</h1>
            <p></p>
        </header>
        <p>Hey visitor. This is Huseyin speaking. I am currently an assistant professor of computer science at Ball State University.
        I am living in Muncie (IN) with my lovely wife and two sweet kids. Before that we lived in Tuscaloosa (AL) for 6 years.
        We are originally from beautiful Turkey. And this is how we say "Hi" in Turkish: "Merhaba".
        </p>
        
        <ul class="actions">
            <li><a href="about-me.php" class="button">Know more about me</a></li>
        </ul>
        
    </div>
    <span class="image object">
        <img id="mainpic" src="images/static.gif" alt="" />
    </span>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        //MicroModal.show('modal-1'); // [1]
        $('#mainpic').attr("src","images/"+Math.floor(Math.random() * 8)+".jpg");
    });
</script>

<?php include 'footer.php'; ?>