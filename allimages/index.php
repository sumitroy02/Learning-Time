<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poiret+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
   <style>
    * {
    padding: 0%;
    margin: 0%;
    cursor: pointer;
    font-family: "Raleway", serif;

}


.main1 {
    width: 100%;
    height: auto;
}



.background {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #09243a;
}

.nav1 {
    width: 90%;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.navdiv1 {
    font-size: 2rem;
    color: white;
}

.navdiv2 {
    width: auto;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    font-size: 0.9rem;
    color: white;
    letter-spacing: 1px;
    font-family: "Raleway", serif;
}

.navop {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40%;
    width: 75px;
    transition: ease 0.5s;
}

.navop:hover {
    transition: ease 0.5s;
    background-color: white;
    color: #09243a;
}

.navop2 {
    width: auto;
    padding: 0px 15px;
    display: flex;
    gap: 0.4rem;
    justify-content: center;
    align-items: center;

}


.afternav {
    width: 100%;
    height: 900px;
    background-image: url(backimagefirstone.jpg);
    background-size: auto;
    background-color: white;
    display: flex;
    overflow:hidden;
    justify-content: center;
    align-items: center;
}

.registrationdiv {
    width: 1400px;
    height: auto;
    display: flex;
    justify-content: space-between;
    box-sizing: border-box;
    
    
}

.registrationform {
    width: 37%;
    height: 700px;
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 1.3rem;
    border-radius: 15px;
    position: relative;
    filter: drop-shadow(8px 8px 12px rgba(0, 0, 0, 0.1));
}

.cut{
    width: 40px;
    height: 40px;
    border-radius:50%;
    background-color:#09243a;
    display: none;
    justify-content: center;
    align-items: center;
    position:absolute;
    top:-20px;
    right:-20px;
    
}

.reg-input {
    width: 80%;
    height: 40px;
    padding-left: 5px;
    box-sizing: border-box;
    outline: none;
}

.choosetext {
    font-size: 0.9rem;
    color: rgb(29, 28, 28);
    font-family: "Raleway", serif;
}

.opdiv {
    width: 80%;
    height: auto;
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
    justify-content: center;
    align-items: start;

}

.selecop {
    width: 100%;
    height: 40px;
}

.error {
    color: #FF0000;
}

.reg-submit {
    width: 80%;
    height: 40px;
    border: none;
    background-image: linear-gradient(#09243a,rgb(15, 54, 86),rgb(22, 82, 132));
    font-size: 1.6rem;
    margin-top: 20px;
    color: white;
    font-weight: 600;
    font-family: "Raleway", serif;
}

.regformtext {
    color: #09243a;
    font-family: "Raleway", serif;
}

.learndiv {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1rem;
    color: #f6d55c;
    font-family: "Raleway", serif;
    margin-top: 5px;
}

.detailstxt {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.3rem;
    font-family: "Raleway", serif;
    color: #09243a;
    width: 200px;
    height: 30px;

}

.regi-sibling-div1 {
    width: 800px;
    height: 800px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
}

.text1 {
    width: auto;
    padding-left: 20px;
    box-sizing: border-box;
    font-size: 3.5rem;
    font-weight: 800;
    color: #09243a;
    font-family: "Raleway", serif;
    position: absolute;
    top: 0px;
}


.regi-sibling-div1>.regi-sibling-div {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    top: 100px;
}


.kid{
    width: 25%;
    height: auto;
    position: absolute;
    /* top:10px; */
    animation: kid  1.2s ease infinite alternate;

}

.planet1{
    width:8%;
    height: auto;
    position: absolute;
    /* top:10px; */
    left:35%;
    animation: planet1  1.1s ease-in infinite alternate;

}

.book{
    width: 7.5%;
    height: auto;
    position: absolute;
    animation: book  1.4s ease-in-out infinite alternate;
    right: 35%;
}


.rocket1{
    width: 8%;
    height: auto;
    position: absolute;
    animation: rocket1  1.1s ease infinite alternate; 
    transform: rotate(45deg);
    /* z-index: -1; */
}


.hat{
    width: 8%;
    height: auto;
    position: absolute;
    animation: hat  0.9s ease-in-out infinite alternate; 
    top:5%;
}


.laptop{
    width: 10%;
    height: auto;
    position: absolute;
    animation: laptop  1.1s ease infinite alternate; 
    top:45%;
    /* left: 40%; */
}

@keyframes kid {
    from {
        top: 80px;
    }

    to {
        top: 100px
    }
}


@keyframes book {
    from {
        top: 40%;
        
    }

    to {

        top: 35%;
      
    }
}





@keyframes planet1 {

from {
    top: 200px;
    /* transform: rotate(0deg); */

}

to {
    top: 230px;
    /* transform: rotate(180deg); */

}
}


@keyframes rocket1 {
    from {
        top: 25%;
        right: 35%;
    }

    to {

        top: 20%;
        right: 30%;
    }
}




@keyframes hat {
    from {
        transform: rotate(10deg);
    }

    to {
        transform: rotate(-10deg);
    }
}



@keyframes laptop {

/* from {
   
}

to {
   
} */

from {
       left: 35%;
       transform: rotate(10deg);
    }

    to {
        left: 40%;
        transform: rotate(-10deg);
    }
}

/* 



@keyframes flask {
    from {
        bottom: 175px;
    }

    to {
        bottom: 155px
    }
}


@keyframes telescope {
    from {
        right: 30%;
    }

    to {
        right: 25%;
    }
}




} */

.Registration-btn-div{
    display:none;
}


.some-free-access-div{
    display:none;
}

.box{
    display:none;
}












.boxs{
    width: 100%;
    height: 400px;
    display:none;
    justify-content:center;
    align-items:center;
    background-color:#09243a;
}

.boxs1{
    width:60%;
    height: 100%;
    /* display:flex; */
    /* justify-content:center;
    align-items:center;*/
    background-color:white; 
    filter: drop-shadow(0px 7px 10px rgba(0, 0, 0, 0.53));
    border-radius:15px;
    overflow:hidden;
}

.boxs2{
    width:300%;
    height: 100%;
    display:flex;
    justify-content:space-evenly;
    /* align-items:center; */
    animation: slider1 10s ease-in-out  infinite alternate;
}

.wraps{
    width: 100%;
    height: 100%;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* .wraps img{

    width: 100%;
    height: auto;
} */

@keyframes slider1{
            0%{transform: translateX(0%);}
            30%{transform: translateX(0%);}
            33%{transform: translateX(-33.33333333%);}
            63%{transform: translateX(-33.33333333%);}
            66%{transform: translateX(-66.666666666667%);}
            100%{transform: translateX(-66.66666666667%);}
        }





.thirdsection {
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 6rem;
    background-color: white;
    background-image: url(backimagesecondone.png);
    background-repeat: no-repeat;
    background-size: auto;
}

.course-txt-heading {
    width: 300px;
    height: 50px;
    font-weight: 700;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    font-family: "Raleway", serif;
    /* color: #09243a; */
    color:  #f6d55c;

    /* background-color: white; */
    border-radius: 50px;
    /* border-bottom: solid 6px #f6d55c;
    border-right: solid 6px #f6d55c; */
    margin-top: 100px;
}

.course-sec-div {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 80%;
    height: auto;
    flex-wrap: wrap;
    gap: 4rem;
}


.courses {
    width: 300px;
    height: 300px;
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    color: #09243a;
    font-size: 1.1rem;
    font-family: "Raleway", serif;
    gap: 1.5rem;
    text-align: center;
    /* border-bottom: solid 6px #f6d55c;
    border-right: solid 6px #f6d55c; */
    filter: drop-shadow(0px 10px 8px rgba(0, 0, 0, 0.11));
    transition: 0.3s ease;
    padding-bottom:30px;
    box-sizing:border-box;
    border-radius: 12px;
}




/* .courses:hover {
    transition: 0.5s ease;
    transform: translateY(-10px);
} */

.courses:hover {
    /* background-color:rgb(1, 20, 36); */
    color: white;
    background-image: linear-gradient(120deg,rgb(1, 20, 36),#0d3557,#225884);

 
}






.gkimg {
    width: 80px;
    height: auto;
}

.enimg {
    width: 80px;
    height: auto;
}

.moralimg {
    width: 80px;
    height: auto;
}

.onlineimg {
    width: 80px;
    height: auto;
}

.heighschoolstudyimg {
    width: 80px;
    height: auto;
}

.Competitiveimg {
    width: 80px;
    height: auto;
}




.viewmorebtn{
    width: 55%;
    height: 50px;
    overflow: hidden;
    position: relative;
    transition:0.3s ease ;
    background-color:white;
    
}

.viewmorebtn1 {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: rgb(255, 255, 255);
    font-family: "Raleway", serif;
    background-color: none;
    font-size: 1.2rem;
    /* font-weight: 500; */
    /* gap: 0.5rem; */
    z-index: 2;
    position: absolute;
    border: none;
    transition:0.3s ease ;
}

.viewmorebtn2{
    width: 300px;
    height: 200px;
    background-image: linear-gradient(rgb(1, 20, 36),#0d3557,#225884);
      /* background-color:rgb(1, 20, 36); */
    transform: rotate(20deg);
    right:10px;
    top:-100px;
    position: absolute;
    transition: 0.3s ease;
}


.courses:hover .viewmorebtn2{
    /* transition: 0.5s ease; */
    transform: rotate(0deg);
    right:100%;

}

.courses:hover .viewmorebtn1{
    /* transition:0.5s ease ; */
    color: rgb(1, 20, 36);
    /* font-weight: 600; */
    
}




.navop5 {
    width: 260px;
    height: 42px;
    border: none;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 25px;
    overflow: hidden;
    background-color: white;
}

.searchinput {
    width: 80%;
    height: 100%;
    border: none;
    padding-left: 20px;
    box-sizing: border-box;
    font-size: 1rem;
    font-family: "Raleway", serif;
    border-radius: 25px;
    outline: none;
}

.searchicon {
    color: #09243a;
    margin-right: 12px;
}

.background2 {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: white;
    overflow:hidden;
}


.whatdiv {
    width: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 1rem;
    margin-top: 200px;
}

.offertxt {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Raleway", serif;
    font-size: 2rem;
   
    color: #f6d55c;
    font-weight: 700;
}

.futuretxt {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Raleway", serif;
    font-size: 2.5rem;
    color: #09243a;
    font-weight: 800;
}

.thirdtextdiv{
    width: 100%;
    height: auto;
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
    gap: 1rem;

}

.upgradetxt{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Raleway", serif;
    font-size: 2.4rem;
    color:rgb(255, 255, 255);
    font-weight: 800;
    /* background-color:red; */
}

.futurtxt{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Raleway", serif;
    font-size: 1.5rem;
    color:rgb(255, 255, 255);
    font-weight: 600;
}

.offerboxdiv {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px 0px;
    flex-wrap: wrap;
    gap:3rem;

}

.offerbox {
    width: 300px;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #09243a;
    filter: drop-shadow(0px 10px 7px rgba(0, 0, 0, 0.25));
    transition: ease .2s;

}

.offerinnerbox {
    width: 300px;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 1.3rem;
    border-radius: 0px 0px 50px 0px;
    background-color: white;
    transition: ease .2s;
}



.offerinnerbox:hover{
    background-image: linear-gradient(45deg,rgb(1, 20, 36),rgb(1, 32, 58),rgb(1, 48, 87),rgb(1, 32, 58),rgb(1, 20, 36));

}

.offerinnerbox:hover .offerbox2{
 color:white;
}


.offerinnerbox:hover .offerbox3{
 color:white;
}

 .offerbox:hover{
    background-color:rgb(255, 255, 255);

}

.offerinnerbox:hover .seemoretxt{
    /* background-color:rgb(255, 255, 255); */
    border: 1px solid white;
    color:white;
    /* font-weight:500; */
}

.offerinnerbox:hover .icondiv{
    background-color:rgb(255, 255, 255);

}

.offerinnerbox:hover .forstyle{
    color: #09243a;
}

.offerinnerbox:hover .more{
    color:white;
}

/* .offerinnerbox:hover .icondiv{
    background-color:#f6d55c;
    transition: ease .2s;
}

.offerinnerbox:hover .forstyle{
   color:#09243a;
} */


.offerbox1 {
    width: 80%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}



.icondiv {
    width: 60px;
    height: 60px;
    border-radius: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: ease .2s;
    background-color: #09243a;
}

.forstyle{
    color:white;
    transition: ease .2s;

}



.offerbox2 {
    width: 80%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-size: 1.3rem;
    font-weight: 500;
    color:#09243a;
    font-family: "Raleway", serif;
    transition: ease .2s;

}

.offerbox3 {
    width: 80%;
    height:auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-size: 1rem;
    letter-spacing: 1px;
    font-family: "Raleway", serif;
    color:#09243a;
    font-weight: 500;
    /* border:solid black 1px; */
    flex-direction: column;
    gap:0.5rem;
    text-align:start;
    transition: ease .2s;

}

.seemorediv  {
   width: 80%;
   height:35px;
   display: flex;
   justify-content: flex-start;
   align-items: center;
}

.seemoretxt  {
   width: 130px;
   height:100%;
   display: flex;
   /* justify-content: flex-start; */
   align-items: center;
   font-size:1rem;
   letter-spacing:1px;
   font-family: "Raleway", serif;
   color:#09243a;
   /* border-radius:8px; */
   gap:0.5rem;
   /* background-color: #09243a; */
   /* background-image: linear-gradient(-90deg,white,#09243a); */
   /* color: #09243a; */
    font-weight: 500;
    /* color:white; */
   justify-content:center;
   border-radius:5px;
   transition: ease .2s;

}

.more{
    color:#09243a;
    /* color:white; */
    transition: ease .2s;

/* display:none; */
}




.offerbox:hover{
    /* background-color:#f6d55c; */
    transform: translateY(-5px);
    transition: ease .2s;
}

/* .offerbox:hover .seemoretxt{
    background-color: #09243a;
    color:white;
    justify-content:center;
    border-radius:5px;
    transition: ease .2s;
} */

/* .offerbox:hover .more{
    color: white;

} */


.background4 {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color:white;
}



.aboutdiv {
    width: 90%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 200px 0px 110px 0px;
}

.aboutimgdiv {
    width: 50%;
    height: 750px;
    display: flex;
    /* border-radius:50%; */
    justify-content: center;
    align-items: center;
    position: relative;

}

.student{
    width: 70%;
    height: auto;
    position: absolute;
    animation: student 1.7s ease infinite alternate;
}
.planet{
    width: 10%;
    height: auto;
    position: absolute;
    animation: planet 1s ease infinite alternate;
    top:55px;
    right:55%;
}

.stetho{
    width: 10%;
    height: auto;
    position: absolute;
    animation: stetho 1.7s ease infinite alternate;

}
.telescope{
    width: 10%;
    height: auto;
    position: absolute;
    animation: telescope 1.4s ease infinite alternate;
    top:130px;

}
.law{
    width: 10%;
    height: auto;
    position: absolute;
    animation: low 1.1s ease infinite alternate;
    left:30%;
}


.flask{
    width: 10%;
    height: auto;
    position: absolute;
    animation: flask 1s ease infinite alternate;
   left:35%;

}


@keyframes planet {
    from {
        transform: rotate(65deg);
    }

    to {
        transform: rotate(20deg);
    }
}

@keyframes low {

    from {
        top: 255px;
    }

    to {
        top: 300px;
    }
}

@keyframes flask {
    from {
        top: 70%;
    }

    to {
        top:65%;
    }
}


@keyframes telescope {
    from {
        right: 30%;
    }

    to {
        right: 25%;
    }
}

@keyframes stetho {
    from {
        top: 50%;
        right: 30%;
    }

    to {

        top: 50%;
        right: 25%;
    }
}

@keyframes student {
    from {
        top: 50px;
    }

    to {
        top: 70px
    }
}


.aboutimgdiv2 {
    width: 650px;
    height: 650px;
    display: flex;
    background-color:white;
    border-radius:50%;
    justify-content: center;
    align-items: center;
    overflow:hidden;

}

.aboutcontentdiv {
    width: 50%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 2rem;
    background-color:#09243a;
    padding: 50px;
    box-sizing:border-box;
    border-radius:35px;
}

.aboutclass {
    width: 90%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    color: #f6d55c;
    font-size: 1.5rem;
    font-family: "Raleway", serif;
    font-weight: 500;
    letter-spacing: 3px;

}

.communityclass {
    width: 90%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    color: white;
    font-size: 2.8rem;
    font-weight: 600;
    font-family: "Raleway", serif;
    letter-spacing: 3px;
}


.aftercommtxt {
    width: 90%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    color: white;
    font-size: 1.1rem;
    font-family: "Raleway", serif;
    letter-spacing: 1px;

}




.discoverdiv {
    width: 90%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.discoverbtn{
    width: 30%;
    height: 55px;
    overflow: hidden;
    position: relative;
    background-color: #ffffff;
   
    
}
    .discoverinnerbtn1 {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: rgb(255, 255, 255);
    font-family: "Raleway", serif;
    background-color: none;
    font-size: 1rem;
    font-weight: 700;
    gap: 0.5rem;
    z-index: 2;
    position: absolute;
    border: none;
    transition:0.9s ease ;
}

.discoverinnerbtn{
    width: 300px;
    height: 200px;
    background-color:rgb(1, 20, 36);
    transform: rotate(20deg);
    right:10px;
    top:-100px;
    position: absolute;
    transition: 1s ease;
}


.arrow{
color: white;
transition: 1s ease;

}

.discoverbtn:hover .discoverinnerbtn{
    transition: 1s ease;
    transform: rotate(0deg);
    right:100%;
}

.discoverbtn:hover .discoverinnerbtn1{
    transition:1.3s ease ;
    color: rgb(1, 20, 36);
    
}

.discoverbtn:hover .arrow{
    transition:1.3s ease ;
    color: rgb(1, 20, 36);
    }

















.flex-live {
    width: 90%;
    height: 130px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: rgb(1, 20, 36);
    border: solid 0.1px #f6d55ce1;
    border-top: solid #f6d55c 2px;
    border-radius: 30px;
}

.flex-liveimg{
    width: 100px;
    height: 100px;
    border-radius: 10px;
    background-color:rgb(9, 36, 62);
    display: flex;
    justify-content: center;
    align-items: center;
}

.fleximg{
    width: 60%;
    height: auto;
}

.liveimg{
    width: 60%;
    height: auto;  
}

.flex-live-content{
    width: 70%;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.flex-live-txt{
    width: 100%;
    height: 40%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-family: "Raleway", serif;
    color:white;
    font-size:1.4rem;
    font-weight: 500;
    letter-spacing: 2px;
}

.flex-live-sib-div{
    width: 100%;
    height: 40%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-family: "Raleway", serif;
    color:white;
    font-size:1rem;
    /* font-weight: 500; */
    letter-spacing: 2px;
}

.aboutimg{
    width: 135%;
    height: auto;
    /* filter: contrast(80%); */
}





.background3 {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color:rgb(255, 255, 255);
    overflow:hidden;
}

.whydiv{
    width: 90%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    /* gap:4rem; */
    /* margin-top:50px; */
}


.whytxt-div{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 1rem;
}


.whytxt1{
    width: 300px;
    height: 50px;
    font-weight: 700;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    font-family: "Raleway", serif;
    color:  #f6d55c;
    border-radius: 50px;
    margin-top: 100px;
}

.whytxt2{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Raleway", serif;
    font-size: 2.4rem;
    color:#09243a;
    font-weight: 800;
}

.reasondiv{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.reason-img-div{
    width: 50%;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;

}

.reason-content-div{
    width: 50%;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap:1rem;

}

.reason-content1{
    width: 70%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    color: #09243a;
    font-size: 2rem;
    font-family: "Raleway", serif;
    font-weight: 800;
    letter-spacing: 3px;
    gap:2rem;
}

.reason-content2{
    width: 70%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    color:rgb(11, 52, 85);
    font-size: 1.2rem;
    font-family: "Raleway", serif;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-wrap:wrap;

}

.reasonimg{
    width: 50%;
    height: auto;
    position: relative;
    
}
 
.reasonimg4{
    width: 55%;
    height: auto; 
} 


.reasonimg1{
    animation: rereasonimg1move 1s ease infinite alternate;  
}
.reasonimg2{
    animation: rereasonimg2move 1.4s ease infinite alternate;  
}
.reasonimg3{
    animation: rereasonimg3move 0.8s ease infinite alternate;  
}
.reasonimg4{
    animation: rereasonimg4move 1.2s ease infinite alternate;  
}


@keyframes rereasonimg1move {
    from{
       top:-20px;
    }
    to{
      top:20px
    }
}

@keyframes rereasonimg2move {
    from{
       top:-20px;
    }
    to{
      top:20px
    }
}

@keyframes rereasonimg3move {
    from{
       top:-20px;
    }
    to{
      top:20px
    }
}

@keyframes rereasonimg4move {
    from{
       top:-20px;
    }
    to{
      top:20px
    }
}







.footer{
width:100%;
height: auto;
display:flex;
justify-content:space-around;
align-items:center;
flex-direction:column;
background-color:#09243a;
}


.footer-content{
width:90%;
height: auto;
display:flex;
flex-wrap: wrap;
justify-content:center;
align-items:start;
padding-top:50px;
gap:6rem;
}

.footer-content1{
width:auto;
height: auto;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
gap:1.5rem;
}

.follow-txt-div{
    width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
font-size:1.5rem;
color:white;
font-weight:700;
}

.follow-icons{
width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
gap:1.5rem;
}


.footer-content2{
width:auto;
height: auto;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
gap:1.5rem;
}



.quick-link-txt-div{
width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
font-size:1.5rem;
color:white;
font-weight:700;
}

.quick-link-div{
width:100%;
height: auto;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
gap:2.3rem;
}

.footer-link{
width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
text-decoration: none; 
font-size:1rem;
color:white;
}





.footer-content3{
width:auto;
height: auto;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
gap:1.5rem;
}
.Company-txt-div{
    width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
font-size:1.5rem;
color:white;
font-weight:700;
}

.Company-div{
    width:100%;
height: auto;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
gap:2.3rem;
}

.footer-Company-op{
    width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
text-decoration: none; 
font-size:1rem;
color:white;
}





.footer-content4
{
width:auto;
height: auto;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
gap:1.5rem;
}

.Subscribe-txt-div{
    width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
font-size:1.5rem;
color:white;
font-weight:700;
}

.Subscribe-div{
    width:100%;
height: auto;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
gap:1rem;
}




.Subscribe-div-content{
    width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
text-decoration: none; 
font-size:1rem;
color:white;
}

.Subscribe-div-input{
width:100%;
height: auto;
display:flex;
justify-content:flex-start;
align-items:center;
}

.sub-input{
    width: 100%;
    height: 35px;
    padding-left:8px;
    border:none;
}

.Subscribe-div-btn{
    width:100%;
height: auto;
display:flex;
justify-content:center;
align-items:center;
}

.sub-btn{
    width: 50%;
    height: 35px;
    background-color:rgb(1, 20, 36);
    color:white;
    font-size:1.3rem;
    border:none;
    border-radius:7px;
}



.footer-bottom{
    width: 100%;
    background-color:rgb(1, 20, 36);
    height: 60px;
    display:flex;
    justify-content:center;
    align-items:center;
    margin:130px 0px 0px 0px;
    color:white;
}















.background5{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: white;
    overflow:hidden;
    padding: 0px 50px;
box-sizing:border-box;
    gap:2rem;
}

.feedbacktxt{
    width: auto;
    height: 50px;
    font-weight: 700;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    font-family: "Raleway", serif;
    color:  #f6d55c;
    /* border-radius: 50px; */
    margin-top: 100px;
}

.wrapper {
    max-width: 1100px;
    width: 100%;
    position: relative;

}

.wrapper i {
    height: 50px;
    width: 50px;
    background: rgb(15, 68, 110);
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    cursor: pointer;
    position: absolute;
    top: 50%;
    font-size: 1.25 rem;
    transform: translateY(-50%);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);

}

.wrapper i:first-child {
    left: -22px;

}

.wrapper i:last-child {
    right: -22px;

}

.wrapper .carousel {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% / 3) - 12px);
    gap: 16px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    scrollbar-width: 0;
}

.carousel::-webkit-scrollbar {
    display: none;
}

.carousel :where(.card, .img) {
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel.dragging {
    scroll-snap-type: none;
    scroll-behavior: auto;
}

.carousel.no-transition {
    scroll-behavior: auto;
}

.carousel.dragging .card {
    cursor: grab;
    user-select: none;
}

.carousel .card {
    scroll-snap-align: start;
    height: 300px;
    list-style: none;
    background: rgb(11, 46, 73);
    border-radius: 8px;
    display: flex;
    cursor: pointer;
    width: 98%;
    padding-bottom: 15px;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap:1.5rem;
}

.card .img {
    background: rgb(255, 255, 255);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow:hidden;
    border:none;

}

.card .img img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 50%;
    border: none;
}

.card h2 {
    font-weight: 500;
    font-size: 1.56rem;
    margin: 30px 0 5px;
}

.card span {
    color:rgb(212, 213, 214);
    font-size: 1rem;
    text-align:center;

}

.feed-icon{
    color:white;
}

@media screen and (max-width: 900px) {
    .wrapper .carousel {
        grid-auto-columns: calc((100% / 2) - 9px);

    }
}

@media screen and (max-width: 600px) {
    .wrapper .carousel {
        grid-auto-columns: 100%;

    }
}
































@media screen and (max-width: 1500px) {
.registrationdiv {
    width: 80%;
    gap:2rem;
}

.text1{
    font-size:3rem;
}

.registrationform {
    width: 40%;
}

.regi-sibling-div1 {
    width: 55%;
}

.regi-sibling-div1>.regi-sibling-div {
    width:800px;
}

.aboutimgdiv {
    height: 450px;
}



.student{
    width: 400px;
   
}
.planet{
    width: 60px;
   
}

.stetho{
    width: 60px;
   

}
.telescope{
    width: 60px;
   
}
.law{
    width: 60px;
  
}


.flask{
    width: 60px;
  

}





.aboutcontentdiv{
    width: 60%;
    padding: 30px;
    gap:1.5rem;
}

.communityclass{
    font-size:2rem;
}

.aftercommtxt{
    font-size:1rem;
}

.flex-liveimg{
    width: 60px;
    height: 60px;
}

.flex-live {
    
    height: 100px;
    border-radius:20px;
}

.flex-live-txt{
    font-size:1.1rem;

}

.flex-live-sib-div{
    font-size:0.9rem;
}

.flex-live-content{
    height: 100%;
}

.discoverbtn{
    height: 45px;
}

@keyframes flask {
    from {
        top: 80%;
    }

    to {
        top: 85%;
    }
}

}


@media screen and (max-width: 1000px) {

   

    .navop5{
        width: 200px;
        height:35px ;
    }

    .afternav {
    padding-top:70px;
    box-sizing:border-box;
    align-items:start;
    background-image:url(none)
}

    .registrationdiv{
        justify-content:center;
    }

.registrationform{
    width: 60%;
    position:absolute;
    z-index: 1;
}

.cut{
    display:flex;
}

.regi-sibling-div1{
  width: 95%;
  height: auto;
}

.text1 {
    width: auto;
    height: auto;
    padding-left: 0px;
    font-size:2.5rem;
    position: static;
}

.regi-sibling-div1>.regi-sibling-div {
    width: 80%;
    height: 500px;
    top: 0px;
}

.kid{
    width: 40%;
    height: auto;
    position: absolute;
    animation: kid  1.2s ease infinite alternate;

}

.planet1{
    width:10%;
    height: auto;
    position: absolute;
    left:25%;
    animation: planet1  1.1s ease-in infinite alternate;

}

.book{
    width: 10%;
    height: auto;
    position: absolute;
    animation: book  1.4s ease-in-out infinite alternate;
    right: 25%;
}


.rocket1{
    width: 10%;
    height: auto;
    position: absolute;
    animation: rocket1  1.1s ease infinite alternate; 
    transform: rotate(40deg);
}


.hat{
    width: 12%;
    height: auto;
    position: absolute;
    animation: hat  0.9s ease-in-out infinite alternate; 
    top:0px;
}


.laptop{
    width: 13%;
    height: auto;
    position: absolute;
    animation: laptop  1.1s ease infinite alternate; 
    top:55%;
}



@keyframes kid {
    from {
        top: 25px;
    }

    to {
        top: 50px
    }
}


@keyframes book {
    from {
        top: 45%;
        
    }

    to {

        top: 55%;
      
    }
}


@keyframes planet1 {

from {
    top: 20%;
}

to {
    top: 25%;
}
}


@keyframes rocket1 {
    from {
        top: 25%;
        right: 25%;
    }

    to {

        top: 20%;
        right: 20%;
    }
}


@keyframes hat {
    from {
        transform: rotate(10deg);
    }

    to {
        transform: rotate(-10deg);
    }
}



@keyframes laptop {

from {
       left: 30%;
       transform: rotate(10deg);
    }

    to {
        left: 20%;
        transform: rotate(-10deg);
    }
}

.Registration-btn-div{
    width: 100%;
    height:auto;
    display:none;
    justify-content:center;
    align-items:start;
    flex-direction:column;
    margin-top:20px;
    gap:1rem;
}
.reg-txt-btn{
    width: 90%;
    height: auto;
    display:flex;
    justify-content:start;
    align-items:center;
    font-size:1.1rem;
    /* color:#f6d55c; */
    color:rgb(128, 128, 128);
    letter-spacing: 1px;
    font-weight:500;
}



.allpro {
    width: 155px;
    height: 43px;
    /* background-color: white; */
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
    /* background-image: linear-gradient(360deg,#09243a,rgb(15, 54, 86),rgb(22, 82, 132)); */
    border-radius:50px;
    background-color:#09243a;
    /* border-bottom:solid 6px rgb(9, 38, 59); */
    /* filter: drop-shadow(0px 7px 4px rgba(3, 13, 71, 0.74)); */
}

.allpro1{
    display:none;
}

.allstyle {
    width: 100%;
    height: 100%;
    background-color:rgb(2, 28, 48);
    transform: translateX(-100%);
    transition: 1s ease;
}

.allpro:hover .allstyle {
    transform: translateX(0%);
    transition: 1s ease;
}

.allprotext {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 1s ease;
    font-weight:600;
    letter-spacing: 1px;
    /* color:rgb(2, 28, 48); */
    color:white;
}

.allpro:hover {
    margin-top:3px;
    /* filter: drop-shadow(0px 2px 1px rgba(248, 212, 170, 0.74)); */
    transition: 0.1s ease;
}



.upgradetxt{
    width: 80%;
    font-size:2rem;
    text-align:center;
}

.aboutdiv{
    flex-direction:column;
    margin: 100px 0px 110px 0px;
    gap:6rem;
}

.aboutimgdiv{
    width: 80%;

}
.aboutcontentdiv{
    width: 90%;
    z-index: 1;
}


.some-free-access-div{
    width: 95%;
    height: auto;
    display:flex;
    justify-content:start;
    align-items:end;
    flex-direction:column;
    overflow:hidden;
    position:absolute;
    top:500px;
    gap:3rem;
    flex-wrap:wrap;
    /* background-color:red; */
}

.free-access-thing{
    width: 240px;
    height: 55px;
    background-color:#09243a;
    border-radius:100px;
    display:flex;
    justify-content:end;
    align-items:center;
    transform: translateX(200%);
    transition: 0.3s ease;  
}



.free-access-thing-1{
    margin-right:70px;
}

.free-access-thing-3{
    margin-right:50px;
}

.free-access-thing-5{ 
    margin-right:30px;
}




.free-access-thing-txt{
    width: 80%;
    height: 100%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight:600;
    letter-spacing:1px;
    color:white;
    font-size:0.9rem;
    z-index: 1;
    position:absolute;
    left:0px;
}


.access-btn-style{
width: 35px;
height: 35px;
display:flex;
    justify-content:center;
    align-items:center;
border-radius:50%;
background-color:#f6d55c;
transition: 0.3s ease;
margin-right:14px;

}


.free-access-thing:hover .access-btn-style{
width: 100%;
height: 100%;
border-radius:100px;
background-color:#f6d55c;
margin-right:0px;
}

/* .free-access-thing:hover{
    background-color:#f6d55c;
} */

.arrow1{
    position:absolute;
    right:27px;
    transform: rotate(45deg);
    transition: 0.3s ease;
    color:white;
}


.free-access-thing:hover .arrow1{
    transform: rotate(90deg);
}


.box{
    display:none;
}


.discoverbtn{
    width: 40%;
}




.footer-content{
width:90%;
height: auto;
display:flex;
flex-wrap: wrap;
justify-content:center;
align-items:start;
padding-top:50px;
gap:6rem;
}



}
@media screen and (min-width: 850px){
    /* *{
        display:none;
    } */
}

@media screen and (max-width: 850px) {
    .allpro1{
        display:flex;
        width: 155px;

        height: 43px;
    /* background-color: white; */
       display: flex;
       justify-content: center;
       align-items: center;
       position: relative;
       overflow: hidden;
    /* background-image: linear-gradient(360deg,#09243a,rgb(15, 54, 86),rgb(22, 82, 132)); */
       border-radius:50px;
       background-color:#09243a;
    }

    .allpro1:hover {
    margin-top:3px;
    transition: 0.1s ease;
}

    .allpro{
        display:none;
    }

    .boxs{
        display:none;
    }




.box{
    width: 100%;
    height: auto;
    display:flex;
    justify-content:center;
    align-items:center;
    background-color:white;
}

.box1{
    width:95%;
    height: auto;
    /* display:flex; */
    /* justify-content:center;
    align-items:center;*/
    background-color:white; 
    filter: drop-shadow(0px 7px 10px rgba(0, 0, 0, 0.26));
    border-radius:15px;
    overflow:hidden;
}

.box2{
    width:300%;
    height: 100%;
    display:flex;
    justify-content:space-evenly;
    /* align-items:center; */
    animation: slider 10s ease-in-out  infinite alternate;
}

.wrap{
    width: 100%;
    height: 100%;
    display:flex;
    justify-content:center;
    align-items:center;
}

.wrap img{

    width: 100%;
    height: auto;
}

@keyframes slider{
            0%{transform: translateX(0%);}
            30%{transform: translateX(0%);}
            33%{transform: translateX(-33.33333333%);}
            63%{transform: translateX(-33.33333333%);}
            66%{transform: translateX(-66.666666666667%);}
            100%{transform: translateX(-66.66666666667%);}
        }



    .some-free-access-div{
    width: 100%;
    height:auto;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:row;
    overflow:hidden;
    position:static;
    /* top:870px; */
    padding:30px 0px;
    gap:1rem;
    background-color:white;
   
}

.free-access-thing{
    width: 240px;
    height: 55px;
    background-color:#09243a;
    border-radius:100px;
    display:flex;
    justify-content:end;
    align-items:center;
    transform: translateX(0%);
    transition: 0.3s ease;  
}



.free-access-thing-1{
    margin-right:0px;
}

.free-access-thing-3{
    margin-right:0px;
}

.free-access-thing-5{ 
    margin-right:0px;
}




.free-access-thing-txt{
    width: 80%;
    height: 100%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight:600;
    letter-spacing:1px;
    color:white;
    font-size:0.9rem;
    z-index: 1;
    position:absolute;
    left:0px;
}


.access-btn-style{
width: 35px;
height: 35px;
display:flex;
    justify-content:center;
    align-items:center;
border-radius:50%;
background-color:#f6d55c;
transition: 0.3s ease;
margin-right:14px;

}


.free-access-thing:hover .access-btn-style{
width: 100%;
height: 100%;
border-radius:100px;
background-color:#f6d55c;
margin-right:0px;
}

/* .free-access-thing:hover{
    background-color:#f6d55c;
} */

.arrow1{
    position:absolute;
    right:27px;
    transform: rotate(45deg);
    transition: 0.3s ease;
    color:white;
}


.free-access-thing:hover .arrow1{
    transform: rotate(90deg);
}


.discoverbtn{
    width: 50%;
}

.afternav{
    height: auto;
    padding-bottom:30px ;
}

.registrationdiv{
    width: 92%;
    height: auto;
}

.registrationform{
    width: 450px;
}


.regi-sibling-div1{
    width: 100%;
    /* background-color:red; */
}

.regi-sibling-div1>.regi-sibling-div{
    width: 450px;
    height:400px;
    /* background-color:green; */
}

.flex-live{
    width: auto;
    height: auto;
    flex-direction:column;
    padding:20px;
    gap:1rem;
}

.flex-liveimg{
    width: 120px;
    height: 120px;
}

.flex-live-content{
    width: auto;
    height: auto;
    gap:0.5rem;
}

.whydiv{
    width: 100%;
}

.reason-content1{
    font-size:1.3rem;
}


.reason-content2{
    font-size:1rem;
}

.reason-content-div{
    height: 300px;
}

.reason-img-div{
    height: 300px;
}


}


@media screen and (max-width: 600px) {

*{
    display:none;
}
}
   </style>
</head>
<body>
<?php
$nameErr = $emailErr = $phoneErr = $pinErr = "";
$name = $email = $phone = $pin = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }
    else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
        }
    };


    if(empty($_POST["email"])){
        $emailErr = "Email is required";
        
    }

    else{
        $email = test_input($_POST["email"]);
        if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            $emailErr = "Invalid email format";
        }
    };


    if(empty($_POST["phone"])){
        $phoneErr = "phone no. is required";
    }

    else{
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0-9]*$/",$phone)){
            $phoneErr = "Invalid phone number";
        }
    };



    if(empty($_POST["pin"])){
        $pinErr = "pincode is required";
    }

    else{
        $pin = test_input($_POST["pin"]);
        if(!preg_match("/^[0-9]*$/",$pin)){
            $pinErr = "Invalid pin number";
        }
    };
    

};

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};
?>


    <main class="main1">
        <div class="background">
            <nav class="nav1">
                <div class="navdiv1">
                    <div class="logodiv">LOGO</div>
                </div>
                <div class="navdiv2">

                    <div class="navop5"><input class="searchinput" type="" placeholder="Search courses"><i class="fa-solid fa-magnifying-glass fa-lg searchicon" ></i></div>

                    <div class="navop navop2">Study Matetials<i class="fa-solid fa-circle-chevron-down fa-lg"></i></div>

                
                    <!-- <div class="navop">Home</div> -->
                    <!-- <div class="navop">About Us</div> -->
                    <!-- <div class="navop">FAQs</div> -->
                    
                </div>
            </nav>
            <div class="afternav">
                <div class="registrationdiv">


                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="registrationform" class="registrationform" method="post" data-aos="fade-down"
                    
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <div class="cut" onclick="cutbtn()"><i class="fa-solid fa-xmark fa-lg" style="color: #ffffff;"></i></div>
                        <h1 class="regformtext">Registration Form
                            <div class="learndiv">Learn from India's best teachers</div>
                        </h1>
                        <div class="detailstxt">Enter your details</div>
                        <input name="name" class="reg-input" type="text" placeholder="User name" value="<?php echo $name; ?>">
                        <span class="error"><?php echo $nameErr;?></span>
                        <input name="email" class="reg-input" type="email" placeholder="Email" value="<?php echo $email; ?>">
                        <span class="error"><?php echo $emailErr;?></span>
                        <input name="phone" class="reg-input" type="tel" placeholder="Phone no." value="<?php echo $phone; ?>">
                        <span class="error"><?php echo $phoneErr;?></span>
                        <input name="pin" class="reg-input" type="text" placeholder="Pincode" value="<?php echo $pin; ?>">
                        <span class="error"><?php echo $pinErr;?></span>

                        
                        <div class="opdiv">
                            <label for="state" class="choosetext"><b>Choose State:</b></label>
                            <select name="state" id="state" class="selecop" placeholder="Choose State">
                                <option value="">--\--</option>
                                <option  value="Delhi"  ><button class="abc" >Delhi</button>
                                </option>
                                <option class="stateoption" value="Mumbai" data-stateindex="2">Mumbai
                                </option>
                                <option class="stateoption" value="Kolkata">Kolkata</option>
                                <option class="stateoption" value="Uttar-Pradesh">Uttar Pradesh</option>
                            </select>
                        </div>
                        <input class="reg-submit" type="submit" name="submit" value="Submit">

                    </form>


                    <div class="regi-sibling-div1">
                        <h1 class="text1">Teachers can open the door, but you must enter it<div style="color:#f6d55c;"> yourself.</div></h1>
                        <div  class="Registration-btn-div" id="registration-btn-div"><div class="reg-txt-btn">It All Starts with You. Register Now to Unlock More Features!</div>
                        <div onclick="regbtn()"  class="allpro">
                            <!-- <div class="allstyle"></div> -->
                            <div class="allprotext">Register now</div>
                        </div>
                        <div onclick="regbtn1()"  class="allpro1">
                            <!-- <div class="allstyle"></div> -->
                            <div class="allprotext">Register now</div>
                        </div>
                        </div>
                        <div class="regi-sibling-div">
                          <img class="kid" src="kid1.png" alt="">
                          <img class="hat" src="hat.png" alt="">
                          <img class="book" src="book.png" alt="">
                          <img class="planet1" src="galaxy1.png" alt="">
                          <img class="rocket1" src="rocket3.png" alt="">
                          <img class="laptop" src="laptop.png" alt="">
                        </div> 
                    </div>
                    
                </div>
            </div>

            <div class="boxs">
                <div class="boxs1">
                    <div class="boxs2"> 
                        <div class="wraps">div</div>
                        <div class="wraps">2</div>
                        <div class="wraps">3</div>
                    </div>
                </div>
            </div>







            <div class="box">
                <div class="box1">
                    <div class="box2"> 
                        <div class="wrap"><img src="banner1.jpg" alt=""></div>
                        <div class="wrap"><img src="banner2.jpg" alt=""></div>
                        <div class="wrap"><img src="banner3.jpg" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="some-free-access-div">
                <div id="free-access-thing-1" class=" free-access-thing free-access-thing-1"> 
                    <div class="free-access-thing-txt">Free Trial Classes</div> 
                    <div class="access-btn-style"></div>
                    <i class="fa-solid fa-arrow-up fa-sm arrow1"></i>
                </div>
               
                <div id="free-access-thing-3" class=" free-access-thing free-access-thing-3"> 
                    <div class="free-access-thing-txt">Free Learning Videos </div> 
                    <div class="access-btn-style"></div>
                    <i class="fa-solid fa-arrow-up fa-sm arrow1"></i>
                </div>
        
                <div id="free-access-thing-5" class=" free-access-thing free-access-thing-5"> 
                    <div class="free-access-thing-txt">Free Study Materials</div>
                    <div class="access-btn-style"></div>
                    <i class="fa-solid fa-arrow-up fa-sm arrow1"></i>
                </div>
            </div>
            



            <div class="thirdsection">
                <div class="thirdtextdiv">
                <div class="course-txt-heading">Our Courses</div>
                <div class="upgradetxt">Upgrade Your Skills Enroll in Expert-Led Online Courses Today!</div>
                <div class="futurtxt">A Better Learning Journey, Futur Start Here</div>
                </div>
                <div class="course-sec-div">
                    <div class="courses">
                        <img class="courseimg gkimg" src="gk.png" alt="error">
                        General Knowledge 
                        <div class="viewmorebtn">
                            <div class="viewmorebtn1"> 
                                Start Learning
                            </div> 
                            <div class="viewmorebtn2"></div>
                        </div>
                    </div>
                    <div class="courses">
                        <img class="courseimg enimg" src="en.png" alt="error">English Speaking<br>&<br>Learning 
                        <div class="viewmorebtn">
                            <div class="viewmorebtn1"> 
                                Start Learning
                            </div> 
                            <div class="viewmorebtn2"></div>
                        </div>
                    </div>
                    <div class="courses"><img class="courseimg moralimg" src="moraledu.png" alt="error">Moral Education  <div class="viewmorebtn">
                            <div class="viewmorebtn1"> 
                                Start Learning
                            </div> 
                            <div class="viewmorebtn2"></div>
                        </div></div>
                </div>

                <div class="course-sec-div">
                    <div class="courses"><img class="courseimg onlineimg" src="online-teaching.png" alt="error">Classes 1-10  <div class="viewmorebtn">
                            <div class="viewmorebtn1"> 
                                Start Learning
                            </div> 
                            <div class="viewmorebtn2"></div>
                        </div></div>
                    <div class="courses"><img class="courseimg heighschoolstudyimg" src="11-12class.png" alt="error">Classes 11-12  <div class="viewmorebtn">
                            <div class="viewmorebtn1"> 
                                Start Learning
                            </div> 
                            <div class="viewmorebtn2"></div>
                        </div></div>
                    <div class="courses"><img class="courseimg Competitiveimg" src="competitive.png" alt="error">Competitive Exams  <div class="viewmorebtn">
                            <div class="viewmorebtn1"> 
                                Start Learning
                            </div> 
                            <div class="viewmorebtn2"></div>
                        </div></div>
                </div>
            </div>
           


        </div>
        <div class="background2">
            <div class="whatdiv">
                <div Class="offertxt">What We Offer</div>
                <div class="futuretxt">For Your Future Learning.</div>
                <div data-aos="flip-down" class="offerboxdiv">

                    <div class="offerbox">
                    <div class="offerinnerbox">
                       <div class="offerbox1"><div class="icondiv"><i class="fa-solid fa-graduation-cap fa-lg forstyle" ></i></div></div>
                       <div class="offerbox2">Online Courses</div>
                       <div class="offerbox3">Lorem ipsum Lorem ipsum dolor sit </div>
                       <div class="seemorediv"><div class="seemoretxt">Read more <i class="fa-solid fa-play fa-xs more"></i></div></div>
                    </div>
                    </div>

                    <div class="offerbox">
                    <div class="offerinnerbox">
                       <div class="offerbox1"><div class="icondiv"><i class="fa-solid fa-user fa-lg forstyle" ></i></div></div>
                       <div class="offerbox2">Expert Teachers</div>
                       <div class="offerbox3">Lorem ipsum dolor sit Lorem ipsum dolor sit amet </div>
                       <div class="seemorediv"><div class="seemoretxt">Read more <i class="fa-solid fa-play fa-xs more"></i></div></div>
                    </div>
                    </div>

                    <div class="offerbox">
                        <div class="offerinnerbox">
                            <div class="offerbox1"><div class="icondiv"><i class="fa-solid fa-file fa-lg forstyle" ></i></div></div>
                            <div class="offerbox2">Get Certificate</div>
                            <div class="offerbox3">Lorem, ipsum dolor Lorem ipsum dolor sit amet consectetur </div>
                            <div class="seemorediv"><div class="seemoretxt">Read more <i class="fa-solid fa-play fa-xs more"></i></div></div>
                       </div>
                    </div>

                    <div class="offerbox">
                        <div class="offerinnerbox">
                            <div class="offerbox1"><div class="icondiv"><i class="fa-solid fa-universal-access fa-lg forstyle" ></i></div></div>
                            <div class="offerbox2">Life Time Access</div>    
                            <div class="offerbox3">Lorem ipsum dolor Lorem ipsum dolor sit amet </div>
                            <div class="seemorediv"><div class="seemoretxt">Read more <i class="fa-solid fa-play fa-xs more"></i></div></div>
                       </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="background4">
            <div class="aboutdiv">
                <div class="aboutimgdiv">
                    
                    <img class="student" src="student.jpg" alt="">
                    <img class="planet" src="planet.png" alt="">
                    <img class="stetho" src="stetho.png" alt="">
                    <img class="telescope" src="telescope.png" alt="">
                    <img class="law" src="law.png" alt="">
                    <img class="flask" src="flask.png" alt="">
                    
                </div>
               <div class="aboutcontentdiv">
                    <div class="aboutclass">About Us</div>
                    <div class="communityclass">Creating a Lifelong Learning Best Community</div>
                    <div class="aftercommtxt">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks</div>
                    <div class="flex-live" >
                        <div class="flex-liveimg"><img class="fleximg" src="fleximg.png" alt=""></div>
                        <div class="flex-live-content">
                            <div class="flex-live-txt">Flexible Classes</div>
                            <div class="flex-live-sib-div">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis neque quidem.</div>
                        </div>
                    </div>
                    <div class="flex-live">
                        <div class="flex-liveimg"><img class="liveimg" src="liveimg.png" alt=""></div>
                        <div class="flex-live-content">
                            <div class="flex-live-txt">Live Classes From Anywhare</div>
                            <div class="flex-live-sib-div">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis neque quidem.</div>
                        </div>
                    </div>
                    <div class="discoverdiv"> 
                        <div class="discoverbtn">
                            <div class="discoverinnerbtn1"> 
                                Discover more
                                <i class="fa-solid fa-arrow-right fa-sm arrow" ></i>
                            </div> 
                            <div class="discoverinnerbtn"></div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <div class="background5">
            <div class="feedbacktxt">Our Students Feedback</div>
            <div class="wrapper">
               <i id="left" class="fa-solid  fas fa-angle-left feed-icon"></i>
               <ul class="carousel">
                  <li class="card">
                      <div class="img"><img src="avatar1.png" alt="" draggable="false"> </div>
                      <h2 style="color:rgb(255, 255, 255); font-weight:bold;">Nishant Chaturvedi</h2>
                      <span>Lorem ipsum dolor sit amet consectetur.</span>
                  </li>
                  <li class="card">
                      <div class="img"><img src="avatar2.png" alt="" draggable="false"> </div>
                      <h2 style="color: rgb(255, 255, 255); font-weight:bold;">Sudhir Sharma</h2>
                      <span>Lorem ipsum dolor sit amet.</span>
                  </li>
                  <li class="card">
                      <div class="img"><img src="avatar4.png" alt="" draggable="false"> </div>
                      <h2 style="color:rgb(255, 255, 255); font-weight:bold;">Sidhant Agarwal</h2>
                      <span>Lorem ipsum dolor sit amet consectetur.</span>
                  </li>
                  <li class="card">
                      <div class="img"><img src="avatar3.png" alt="" draggable="false"> </div>
                      <h2 style="color: rgb(255, 255, 255); font-weight:bold;">Arpita Sharma</h2>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                  </li>
                  <li class="card">
                      <div class="img"><img src="avatar1.png" alt="" draggable="false"> </div>
                      <h2 style="color:rgb(255, 255, 255); font-weight:bold;">Saurav Kumar</h2>
                      <span>Lorem ipsum dolor sit amet consectetur.</span>
                  </li>
                  <li class="card">
                      <div class="img"><img src="avatar3.png" alt="" draggable="false"> </div>
                      <h2 style="color: rgb(255, 255, 255); font-weight:bold;">Deepika Rawat</h2>
                      <span>Lorem ipsum dolor, sit amet consectetur adipisicing.</span>
                  </li>
               </ul>
               <i id="right" class="fa-solid fas fa-angle-right feed-icon"></i>
            </div>
        </div>
        <div class="background3">
            <div class="whydiv">
                <div class="whytxt-div">
                    <div class="whytxt1">Why Choose Us?</div>
                    <div class="whytxt2">Here's The Reasons!</div>
                </div>
                <div data-aos="fade-down-left" class="reasondiv">
                    <div class="reason-img-div">
                          <img class="reasonimg reasonimg1" src="reason1expert.png" alt="error">
                    </div>
                    <div class="reason-content-div">
                        <div class="reason-content1"><i class="fa-solid fa-sun fa-lg" style="color: #f6d55c;"></i>Expert-Led Courses</div>
                        <div class="reason-content2">Learn from top industry experts and educators with years of experience.</div>
                    </div>
                </div>

                <div data-aos="fade-down-right" class="reasondiv">
                    <div class="reason-content-div">
                        <div class="reason-content1"><i class="fa-solid fa-laptop fa-lg" style="color: #f6d55c;"></i>Interactive Learning Experience</div>
                        <div class="reason-content2">Enjoy quizzes, assignments, and real-time feedback to make learning fun and effective.</div>
                    </div>
                    <div class="reason-img-div">
                         <img class="reasonimg reasonimg2" src="reason2interactive.png" alt="error">
                    </div>
                </div>

                <div data-aos="fade-down-left" class="reasondiv">
                    <div class="reason-img-div">
                         <img class="reasonimg reasonimg3" src="reason3certified.png" alt="error">
                    </div>
                    <div class="reason-content-div">
                        <div class="reason-content1"><i class="fa-solid fa-certificate fa-lg" style="color: #f6d55c;"></i>Get Certified</div>
                        <div class="reason-content2">Boost your resume with globally recognized certifications upon course completion.</div>
                    </div>
                </div>

                <div data-aos="fade-down-right" class="reasondiv">
                    <div class="reason-content-div">
                        <div class="reason-content1"><i class="fa-solid fa-clock fa-lg" style="color: #f6d55c;"></i>Learn at Your Own Pace</div>
                        <div class="reason-content2">Whether you're a night owl or an early bird, our platform is available 24/7 to suit your schedule.</div>
                    </div>
                    <div class="reason-img-div">
                        <img class="reasonimg reasonimg4" src="reason4.png" alt="error">
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <footer class="footer">
     <div class="footer-content">
        
         <div class="footer-content2">
             <div class="quick-link-txt-div">Quick Link</div>
             <div class="quick-link-div">
                <a class="footer-link" href="">Home</a>
                <a class="footer-link" href="">Blog</a>
                <a class="footer-link" href="">Courses</a>
                <a class="footer-link" href="">About</a>
             </div>
         </div>

         <div class="footer-content3">
         <div class="Company-txt-div">Company</div>
             <div class="Company-div">
                <a class="footer-Company-op" href="">Features</a>
                <a class="footer-Company-op" href="">Newsletter</a>
                <a class="footer-Company-op" href="">Teachers</a>
                <a class="footer-Company-op" href="">Studens</a>
             </div>
         </div>

         <div class="footer-content2">
             <div class="quick-link-txt-div">Support</div>
             <div class="quick-link-div">
             <a class="footer-Company-op" href="">FAQs</a>
             <a class="footer-Company-op" href="">Search Guide</a>
             <a class="footer-Company-op" href="">Contact</a>
             <a class="footer-Company-op" href="">Helpline</a>
             </div>
         </div>

         <div class="footer-content3">
         <div class="Company-txt-div">Legal</div>
             <div class="Company-div">
                <a class="footer-Company-op" href="">Terms of use</a>
                <a class="footer-Company-op" href="">License agreement</a>
                <a class="footer-Company-op" href="">Privacy policy</a>
                <a class="footer-Company-op" href="">Copyright information</a>
                <a class="footer-Company-op" href="">Cookies policy</a>
                <a class="footer-Company-op" href="">Cookies Setting</a>
             </div>
         </div>



         <div class="footer-content4">
            <div class="Subscribe-txt-div">Subscribe</div>
            <div class="Subscribe-div" >
                <div class="Subscribe-div-content" >Subscribe for updates and exclusive content.</div>
                <div class="Subscribe-div-input" ><input class="sub-input" type="email" placeholder="E-Mail ID"></div>
                <div class="Subscribe-div-btn" ><button class="sub-btn">Subscribe</button></div>
            </div>
         </div>

         <div class="footer-content1">
            <div class="follow-txt-div">Follow Us On</div>
            <div class="follow-icons">
            <i class="fa-brands fa-facebook-f fa-lg" style="color: #ffffff;"></i>
            <i class="fa-brands fa-x-twitter fa-lg" style="color: #ffffff;"></i>
            <i class="fa-brands fa-instagram fa-lg" style="color: #ffffff;"></i>
            <i class="fa-brands fa-linkedin-in fa-lg" style="color: #ffffff;"></i>
            </div>
         </div>
    </div>
        <div class="footer-bottom">
            &copy; 2025 E-Learning Platform. All Rights Reserved.
        </div>
    </footer>

    
<script>








function cutbtn(){
    document.getElementById("registrationform").style.display = "none";
    document.getElementById("registration-btn-div").style.display = "flex";

    setTimeout(() => {
        document.getElementById("free-access-thing-1").style = "transform: translateX(0%);"
    }, 500);

    setTimeout(() => {
        document.getElementById("free-access-thing-3").style = "transform: translateX(0%);"
    }, 1000);

    setTimeout(() => {
        document.getElementById("free-access-thing-5").style = "transform: translateX(0%);"
    }, 1500);


   
}

function regbtn(){
    document.getElementById("registrationform").style.display = "flex";
    document.getElementById("registration-btn-div").style.display = "none"

    setTimeout(() => {
        document.getElementById("free-access-thing-1").style = "transform: translateX(200%);"
    }, 1500);

    setTimeout(() => {
        document.getElementById("free-access-thing-3").style = "transform: translateX(200%);"
    }, 1000);

    setTimeout(() => {
        document.getElementById("free-access-thing-5").style = "transform: translateX(200%);"
    }, 500);

};

function regbtn1(){
    document.getElementById("registrationform").style.display = "flex";
    document.getElementById("registration-btn-div").style.display = "none"}



// setTimeout(() => {
//     let onhover = document.getElementById("free-access-thing-1");
//     onhover.addEventListener("mouseenter",function(){
//        onhover.style = "background-color:#f6d55c;transform: translateX(0%);"
//     })

//     onhover.addEventListener("mouseenter",function(){
//        onhover.style = "background-color:#09243a;transform: translateX(0%);"
//     })
// }, 350);


document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector(".carousel");
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const wrapper = document.querySelector(".wrapper");

    const firstCard = carousel.querySelector(".card");
    const firstCardWidth = firstCard.offsetWidth;

    let isDragging = false,
        startX,
        startScrollLeft,
        timeoutId;

    const dragStart = (e) => { 
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    };

    const dragging = (e) => {
        if (!isDragging) return;
    
        // Calculate the new scroll position
        const newScrollLeft = startScrollLeft - (e.pageX - startX);
    
        // Check if the new scroll position exceeds 
        // the carousel boundaries
        if (newScrollLeft <= 0 || newScrollLeft >= 
            carousel.scrollWidth - carousel.offsetWidth) {
            
            // If so, prevent further dragging
            isDragging = false;
            return;
        }
    
        // Otherwise, update the scroll position of the carousel
        carousel.scrollLeft = newScrollLeft;
    };

    const dragStop = () => {
        isDragging = false; 
        carousel.classList.remove("dragging");
    };

    const autoPlay = () => {
    
        // Return if window is smaller than 800
        if (window.innerWidth < 800) return; 
        
        // Calculate the total width of all cards
        const totalCardWidth = carousel.scrollWidth;
        
        // Calculate the maximum scroll position
        const maxScrollLeft = totalCardWidth - carousel.offsetWidth;
        
        // If the carousel is at the end, stop autoplay
        if (carousel.scrollLeft >= maxScrollLeft) return;
        
        // Autoplay the carousel after every 2500ms
        timeoutId = setTimeout(() => 
            carousel.scrollLeft += firstCardWidth, 2500);
    };

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    wrapper.addEventListener("mouseenter", () => 
        clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);

    // Add event listeners for the arrow buttons to 
    // scroll the carousel left and right
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id === "left" ? 
                -firstCardWidth : firstCardWidth;
        });
    });


});



</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>



</html>