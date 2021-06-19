<style type = "text/css">


:root{
    --bg-body: #fafbfd;
    --bg-content: #ffffff;
    --bg-hover: #f4f4f4;

    --color-txt: #173b4d;
    --nav-heigth: 70px;
    --shadow: 0 0 30px 0 rgb(82 63 105 / 5%);
}

.dark {
    --bg-body: #151515;
    --bg-content: #242526;
    --bg-hover: #152f28;

    --color-txt: #dcdcdc;
}

a{
    text-decoration: none;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    
    position: relative;
    background-color: var(--bg-body);
    color: var(--color-txt);
    padding-top: calc(var(--nav-heigth) + 30px);
    font-size: 16px ;

}
.container{
    max-width: 1600px;
    margin: auto;
}

.content{
    padding: 15px;
}



/****top nav*****/
.nav-wrapper{
    background-color: var(--bg-content);
    box-shadow: var(--shadow);
    position: fixed;
    top: 0;
    width: 100%;
    padding:  0 30px;
    z-index: 99;
}
.nav{
    height: var(--bg-height);
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo{
    color: var(--bg-txt);
    font-size: 2rem;
    font-weight: 900;
}
.logo i{
    color: red;
}
.darkmode-switch{
    --width: 60px;
    --height: 20px;
    width: var(--width);
    height: var(--height);
    background-color: lightslategray;
    border-radius: 10px;
    position: relative;
    cursor: pointer;
}

.darkmode-switch span{
    display: inline-grid;
    place-items: center;
    height: calc(var(--height) * 2);
    width: calc(var(--height) * 2);
    border-radius: 50%;
    background-color: var(--color-txt);
    color: var(--bg-content);
    font-size: 2rem;
    position: absolute;
    left: 0;
    top: calc(-1 * var(--height) / 2);
    transition: left 0.3s ease-in-out;
}

.darkmode-switch.dark span{
    left: calc(var(--width) - var(--height) * 2);
    background-color: var(--gb-body);
    color: var(--color-txt);
}

.darkmode-switch span .bxs-moon{
    display: none;
}

.darkmode-switch.dark span .bxs-moon{
    display: inline-block;
}

.darkmode-switch span .bxs-sun{
    display: none;
}
/**** end top nav*****/

*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Kaushan Script', cursive;}

/*////body of image circle\\\\\\\*/
.cool{
    justify-content: right;
    align-items:right;
}

.cool{
    width : 70px;
    clip-path : circle();
}

.nav_style{
    
    background-color: #001a66!important;
}


.nav_style a{ color: white};

.nav-item active{
    position: absolute;
    text-align: center;
        padding : 3;
        width : 100%;
        font-size: 35px;
}

/*////////main header\\\\\\\\\*/

.main_header{
    height: 450px;
    width:100%;
}

.rightside h1{
    font-size: 3rem;
}
.corona_rot img{
    animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
    0% { transform : rotate(0); }
    100% { transform: rotate(360deg); }
}

.leftside img{ animation: heartbeat 5s linear infinite; }
@keyframes heartbeat{
    0%
     {
         transform : scale( .75 );
     }
     20%
     {
          transform : scale( 1 );
     }
     40%
     {      
          transform : scale( .75 );
     }
     60%
     {
          transform : scale( 1 );
     }
     80%
     {
          transform : scale(.75 );
     }
     100%
     {
          transform : scale( .75 );
     }
}

/******** box *********/
.box{
    width: 100%;
    border-radius: 10px;
    background-color: var(--bg-content);
    box-shadow: var(--shadow);
    padding : 15px;
    margin-bottom: 20px;
}
.dark .box {
     border: 1px solid var(--bg-content);
     background-color: var(--bg-body);
}
.box-hover{
    transition: transform .2s ease-in-out;
}
.box-hover:hover{
    transform: scale(1.05) translateY(-10px);
    box-shadow: rgb(0 0 0 / 10%) 0px 15px 30px;
}
.box-header{
    padding: 10px 0 30px;
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--color-txt);
    position: relative;
    text-transform: uppercase;
}

/******** end box *********/

/******** COUNTRY DROPDOWN *********/
.country-select{
    position: relative;
}
.country-select-toggle{
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 1.25rem;
    padding: 0 15px;
    cursor: pointer;
    font-weight: 700;
    position: relative;

}
.country-select-list {
    position: absolute;
    top: calc(100% + 50px);
    left: 0;
    width: 100%;
    max-height: 600px;
    overflow-y: scroll;
    padding: 15px;
    background-color: var(--bg-content);
    z-index: 98;
    box-shadow: var(--shadow);
    border-radius: 10px;
    visibility: hidden;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}
.country-select-list input {
    width: 100%;
    border: none;
    outline: none;
    background: #e2e8f0;
    padding: 10px;
    border-radius: 10px;
}
.country-select-list.active {
    top: calc(100% + 20px);
    visibility: visible;
    opacity: 1;
}
.country-item {
    padding: 5px  15px;
    cursor: pointer;
}
.country-item:hover {
    background-color: var(--bg-hover);
}

/******** END COUNTRY DROPDOWN *********/
/******** COUNT BOX *********/
.count{
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.count-icon {
    --width: 70px;
    width: var(--widht);
    height: var(--width);
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-size: 2.5rem;
    margin-right: 15px;
}
.count-info h5{
    font-size: 1.5rem;
}
.count-info span {
    display: inherit;
    margin-top: -10px;
    text-transform: uppercase;
    font-weight: 700;
}
.count-confirmed .count-icon{
    background-color: #ffa0a0;
    color: red;
}
.count-confirmed .count-icon h5 {
    
    color: red;
}

.count-recovered .count-icon{
    background-color: #bffabf;
    color: green;
}
.count-recovered .count-icon h5 {
    
    color: green;
}

.count-deaths .count-icon{
    background-color: #e2e8f0;
    color: #373c43 ;
}
.count-deaths .count-icon h5 {
    
    color: #373c43 ;
}

/******** END COUNT BOX *********/

/******** COUNTRIES TABLE *********/
.table-countries {
    width: 100%;
    text-align: center;
    border-spacing: 0;
}
.table-countries thead tr th,
.table-countries tbody tr td{
    border-bottom: 1px solid  var(--bg-body);
}

.table-countries th {
      padding: 0.5rem;
}
.table-countries td{
    font-weight: 0.9rem;
    padding: 0.5rem;
    width: 25%;
    text-align: center;
}
.table-countries tbody tr:hover{
    background-color: var(--bg-hover);
}

/******** END COUNTRIES TABLE*********/
/******** LOADER*********/
.loader {
    position : fixed;
    z-index: 0;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    display : grid;
    place-items: center;
    background-color: var(--bg-body);
    font-size: 10rem;
    visibility: hidden;
    opacity: 0;
    transition: all.3s ease-in-out;
}
.loading .loader {
    visibility: visible;
    opacity: 1;
}
/******** END LOADER*********/
@media only screen and (max-width: 1280px){
    body{
        font-size: 14px;
    }
}

@media only screen and (max-width: 850px){
    body{
        font-size: 12px;
    }
}





 /***************corona updates*****************/
.corona_update{
         margin:0 0 30px 0;
}

.corona_update h3{ color: #ff7675; }

/*************about section******************/
.sub_section{
    background-color: #f2f2f2;
}


/*************responsive******************/
@media(max-width : 780px)
{
    .main_header{ height: 700px; text-align : center;}

    .main_header h1{
        text-align: center;
        padding : 0;
        width : 100%;
        font-size: 35px;
    }

    .count_style{
        display: inline!important;
    }

    .count_style p{
        text-align: center;
        font-size: 3rem;
        height: 450px;
        width:100%;

    }
}

/********** CORONA LATEST UPDATES with NEWS**********/

        *{
            padding: 0;
            margin: 0;
            font: 1em sans-serif;
        }
        .mapcontainer{
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .upper{
            position: absolute;
            z-index: 2;
            width: 60%;
            left: 20%;
            background: #ff000059;
            padding: 10px;
        }
        .stat{
            float: left;
            width: 30%;
            text-align: center;
            font-size: 20px;
            font-weight: bolder;
            color: white;
        } 
    

/* Footer */
footer{
    display: ruby-base-container;
}
</style>