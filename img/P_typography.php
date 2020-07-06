<!DOCTYPE html>
<?php include("header.php")?>

    <title>GenieTalk Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main-style.css">
    <style>
        .mainheading{
            font-size: 36px;
            text-align: center;
            color:#26a3cc;
        }
        .heading1{
            font-size: 28px;
            text-align: center;
            color:#26a3cc;
        }
        .sub_heading{
            font-size: 28px;
            color: black;
            padding-top: 5px;

        }
        .con{
            font-size: 16px;
        }
        .d1{
            height:150px;
            overflow-y: scroll;
            overflow: auto;
            margin: 10px;
            padding:10px;
           background-color: #f9f3f3;
        }
        @media screen and (max-width: 450px) {
            .sub_heading{
                font-size: 16px;
            }
            .h1{
                font-size: 16px;
            }
            .h2{
                font-size: 14px;
            }
            .h3{
                font-size: 12px;
            }
            .h4{
                font-size: 10px;
            }
            .h5{
                font-size: 8px;
            }
            .h6{
                font-size: 6px;
            }
            .prgm{
                width:300px;
                color:pink;
            }
            .bt{
                float: right;
            }
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="mainheading">
                    Bootstrap Tutorial
                </div><hr>
                <div class="heading1">Text/Typology</div>
                <div class="div_design" width="100%">
                    <h2 class="sub_heading ">Default Setting of Text/Typology</h2>
                        <div class="d1" width="80%">
                            <a href="">font-size</a>    :16px<br>
                            <a href="">line-height</a>  :1.5<br>
                            <a href="">font-family</a>  :"Helvetica Neue", Helvetica, Arial, sans-serif <br>
                            <a href="">margin-top</a>   :0<br>
                            <a href="">margin-botton</a>    :16px or 1rem<br>
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>
                        </div>

                    <h2 class="sub_heading">&ltH1&gt-&ltH6&gt(Heading)</h2> 
                    <div class="d1" >
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Heading tag</th>
                                    <th>Examples</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>H1 -[2.5rem = 40px] </td>
                                    <td><h1 class="h1">   eg: H1 Heading</h1></td> 
                                </tr>
                                <tr>
                                    <td>H2 -[2rem = 32px]</td>
                                    <td><h2 class="h2">eg: H2 Heading</h2></td> 
                                </tr>
                                <tr>
                                    <td>H3 -[1.75rem = 28px] </td>
                                    <td><h3 class="h3">eg: H3 Heading</h3></td> 
                                </tr>
                                <tr>
                                    <td>H4 -[1.5rem = 24px] </td>
                                    <td><h4 class="h4">eg: H4 Heading</h4></td> 
                                </tr>
                                <tr>
                                    <td>H5 -[1.25rem = 20px]</td>
                                    <td><h5 class="h5">eg: H5 Heading</h5></td> 
                                </tr>
                                <tr>
                                    <td>H6 -[1rem = 16px]</td>
                                    <td><h6 class="h6">eg: H6 Heading</h6></td> 
                                </tr>

                            </tbody>
                        </table>
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>
                    </div>
                    <h2 class="sub_heading">&ltsmall&gt</h2> 
                    <div class="d1">
                         -to create a lighter, secondary text in any heading<br>
                         <i><b>Example : </b></i>Chapter1 - <small>Chapter1</small> (After using <u>small</u> tag)
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>
                    </div>

                    <h2 class="sub_heading">&ltmark&gt</h2> 
                    <div class="d1">
                        - to highlight text.<br>
                        <i><b>Example : </b></i>Chapter1 - <mark>Chapter1</mark> (After using <u>mark</u> tag)
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>
                    </div>

                    <h2 class="sub_heading">&ltblockquote&gt</h2> 
                    <div class="d1">
                        - to style content in any tag.<br>
                        - Start with new line.<br>
                        <i><b>Example : </b></i>Chapter1 - <blockquote>“I had this idea and I knew that if I don’t try I would regret it. Last 25 years, what happened is beyond my expectation.”</blockquote> (After using <u>blockquote</u> tag)<br>
                        <b>blockquote-reverse</b>
                        -it is class predefine in bootstrap
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>
                   </div>

                    <h2 class="sub_heading">&ltdl&gt</h2>
                    <div class="d1">
                        -&ltdd&gt used to describe name/term in description list<br>
                        -&ltdl&gt used to define description list<br>
                        -&ltdt&gt used to define terms/names<br>
                        <div class="row">
                            <div class="col-md-6">
                                <i><b>How to use</b></i><br>
                                <div class="prgm">
                                    <code class="prgm">&ltdl&gt</code><br>
                                    <code class="prgm">&ltdt&gt</code>Hobbies<code class="prgm">&lt/dt&gt</code><br>
                                    <code class="prgm">&ltdd&gt</code>Dancing<code class="prgm">&lt/dd&gt</code><br>
                                    <code class="prgm">&ltdd&gt</code>Sketching<code class="prgm">&lt/dd&gt</code><br>

                                   <code class="prgm">&ltdt&gt</code>Food<code class="prgm">&lt/dt&gt</code><br>
                                    <code class="prgm">&ltdd&gt</code>sandwich<code class="prgm">&lt/dd&gt</code><br>
                                    <code class="prgm">&ltdd&gt</code>pasta<code class="prgm">&lt/dd&gt</code><br>
                                    <code class="prgm">&lt/dl&gt</code><br>
                                </div>
                            </div>  
                            <div class="col-md-6">  
                                <i><b>Example : </b></i>
                                <dl>
                                    <dt>Hobbies</dt>
                                    <dd>Dancing</dd>
                                    <dd>Sketching</dd>

                                    <dt>Food</dt>
                                    <dd>sandwich</dd>
                                    <dd>pasta</dd>
                                </dl>
                            </div>    
                        </div>
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>

                   </div>

                    <h2 class="sub_heading">&ltcode&gt</h2>
                    <div class="d1">
                        -it will style the element in following way:
                         <div class="row">
                            <div class="col-md-6">
                                <i><b>How to use</b></i><br>
                                <code class="prgm">&ltp&gt</code>In the paragraph tag i want to use <code class="prgm">&ltcode&gt</code>span<code class="prgm">&lt/code&gt</code>,<code class="prgm">&ltcode&gt</code>div<code class="prgm">&lt/code&gt</code> and <code class="prgm">&ltcode&gt</code>section<code class="prgm">&lt/code&gt</code><code class="prgm">&ltp&gt</code>
                            </div>
                            <div class="col-md-6">
                                 <i><b>Output:</b></i><br>
                                In the paragraph tag i want to use <code>span</code>,<code>div</code> and <code>section</code>
                            </div>
                         </div>  
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>
                    </div>

                    <h2 class="sub_heading">&ltpre&gt</h2>
                    <div class="d1">
                        -it will print same content no change in padding and margin.
                        <div class="row">
                            <div class="col-md-6">
                                <i><b>How to use</b></i><br>
                                <code class="prgm">&ltpre&gt</code><br>In the paragraph<br>tag i want <br>to use other tag also<code class="prgm">&ltpre&gt</code>
                            </div>
                            <div class="col-md-6">
                                <i><b>Output</b></i><br>
                                <pre>In the paragraph<br>tag i want <br>to use other tag also</pre>
                            </div>
                        </div>
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>
                    </div>

                    <div class="heading1">Text/Typology classes</div>
                    <h2 class="sub_heading">Color</h2>
                    <div class="d1">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Textual color</th>
                                    <th>Color description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.text-muted</td>
                                    <td class="text-muted">grey</td>
                                </tr>
                                <tr>
                                    <td>.text-primary</td>
                                    <td class="text-primary">blue</td>
                                </tr>
                                <tr>
                                    <td>.text-success</td>
                                    <td class="text-success">green</td>
                                </tr>
                                <tr>
                                    <td>.text-info</td>
                                    <td class="text-info">dark-blue</td>
                                </tr>
                                <tr>
                                    <td>.text-warning</td>
                                    <td class="text-warning">yellow</td>
                                </tr>
                                <tr>
                                    <td>.text-danger</td>
                                    <td class="text-danger">red</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d1">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Background color</th>
                                    <th>Color description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.bg-primary</td>
                                    <td class="bg-primary">Dark-blue</td>
                                </tr>
                                <tr>
                                    <td>.bg-success</td>
                                    <td class="bg-success">green</td>
                                </tr>
                                <tr>
                                    <td>.bg-info</td>
                                    <td class="bg-info">blue</td>
                                </tr>
                                <tr>
                                    <td>.bg-warning</td>
                                    <td class="bg-warning">yellow</td>
                                </tr>
                                <tr>
                                    <td>.bg-danger</td>
                                    <td class="bg-danger">red</td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>

                    </div>
                    <div class="heading1">Other Classes</div>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Classes</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>.text-left</td>
                                    <td>To align text in left</td>
                                </tr>
                                <tr>
                                    <td>.text-center</td>
                                    <td>To align text in right</td>
                                </tr>
                                <tr>
                                    <td>.text-right</td>
                                    <td>To align text in center</td>
                                    
                                </tr>
                                <tr>
                                    <td>.text-justify</td>
                                    <td>Equal alignment from left and right </td>
                                    
                                </tr>
                                <tr>
                                    <td>.text-capitalize</td>
                                    <td>To capitalize first letter of word</td>
                                </tr>
                                <tr>
                                    <td>.text-uppercase</td>
                                    <td>All letters in uppercase</td>
                                </tr>
                                <tr>
                                    <td>.text-lowercase</td>
                                    <td>All letters in lowercase</td>
                                </tr>
                                <tr>
                                    <td>.pre-scrollable</td>
                                    <td>makes <code class="prgm">&ltpre&gt</code>content scrollable</td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="float-right"><button type="button" class="btn btn-success bt">Try</button></span>

                    </div>

                 </div>
               </div>
            </div>
        </div>
    </div>

<?php include("footer.php")?>
