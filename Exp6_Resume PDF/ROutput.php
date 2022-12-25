<!DOCTYPE html>
<html lang="en">
<html>
    <!-- Reference: https://youtu.be/5IZV6eYui28 -->
    <?php           
        //for image                            
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

        $folder = "images/".$filename;
        move_uploaded_file($tempname, $folder);

        //for pdf
        $filename1 = $_FILES["cv"]["name"];
        $tempname1 = $_FILES["cv"]["tmp_name"];

        $folder1 = "cv/".$filename1;
        move_uploaded_file($tempname1, $folder1);
    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resume.css">
        <style>
            table.center
            {
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
  
    <body>
        <form action="RPdf.php" method = "POST" enctype="multipart/form-data">
        <div class="full">
            <div class="left">
                <div class="image">
                    <?php
                        echo "<img src='$folder' width = '150' height = '200'>";
                    ?>
                </div>
                <div class="Contact">
                    <h2>Contact</h2>
                    <p><b>Email:</b>
                                        <?php 
                                            $email = $_POST['em'];
                                            echo $email;
                                        ?>
                                    </p>
                    <p><b>Mobile no :</b>
                        <?php
                            $mob = $_POST['mno'];
                            echo $mob;
                        ?>
                    </p>
                </div>
                <div class="Skills">
                    <h2>Skills</h2>
                    <ul>
                        <li>
                            <b>
                                Programming Languages:
                            </b>
                                <ul>
                                    <?php
                                        $npl = $_POST['pl'];
                                        for($i=0;$i<$npl;$i++)
                                        {
                                            $tpl = $_POST["pl$i"];
                                            echo "<li>";
                                            echo $tpl;
                                            echo "</li>";
                                        }
                                        echo "<br>";
                                    ?> 
                                </ul>
                        </li>
                        <li>
                            <b>
                                Technology used:
                            </b>
                            <ul>
                                <?php
                                    $ntec = $_POST["tec"];
                                    for($i=0;$i<$ntec;$i++)
                                    {
                                        $ttec = $_POST["tc$i"];
                                        echo "<li>";
                                        echo $ttec;
                                        echo "</li>";
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="Language">
                    <h2>Language</h2>
                    <ul>
                        <?php
                            $nl = $_POST["member"];
                            for($i=0;$i<$nl;$i++)
                            {
                                $tl = $_POST["lang$i"];
                                echo "<li>";
                                echo $tl;
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
                <div class="Hobbies">
                    <h2>Hobbies</h2>
                    <ul>
                        <?php
                            $nh = $_POST["hob"];
                            for($i=0;$i<$nh;$i++)
                            {
                                $thob = $_POST["hob$i"];
                                echo "<li>";
                                echo $thob;
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="name">
                    <?php
                        $tfn = $_POST["fn"];
                        $tmn = $_POST["mn"];
                        $tln = $_POST["ln"];
                        echo "<h1>";
                        echo $tfn." ".$tmn." ".$tln;
                        echo "</h1>";
                    ?>
                </div>
                <div class="title">
                    <?php
                        $tr = $_POST["role"];
                        echo "<p>";
                        echo $tr;
                        echo "</p>";
                    ?>
                </div>
                <div class="Summary">
                    <h2>Summary</h2>
                    <p>To secure a challenging position in a 
                    reputable organization
                        to expand my learning knowledge and skill
                    </p>
                </div>
                <!--
                    <div class="Experience">
                        <h2>Experience</h2>
                        <h3>Abc webdev pvt ltd - Senior Web Developer</h3>
                        <p>January 2022 to Present</p>
                        <ul>
                            <li>Actively engaged in web creative 
                            design and development.</li>
                            <li>Designing project & planing</li>
                        </ul>
                        <h3>Xyz webdev pvt ltd - junior web developer</h3>
                        <p>August 2021 to December 2021</p>
                        <ul>
                            <li>Actively engaged in web creative 
                            design and development.</li>
                            <li>Designing project & planing</li>
                            <li>Working on designing</li>
                        </ul>
                    </div>
                -->

                <div class="Education" class="center">
                    <h2>Education</h2>
                    <table width = "600">
                        <tr>
                            <td><b>University/college</b></td>
                            <td><b>Passing year</b></td>
                            <td><b>percentage</b></td>
                        </tr>
                        <tr>
                            <?php
                                $tugc = $_POST["ugc"];
                                $tphe = $_POST["phe"];
                                $tpphe = $_POST["pphe"];
                                echo "<td>";
                                echo $tugc;
                                echo "</td>";
                                echo "<td>";
                                echo $tphe;
                                echo "</td>";
                                echo "<td>";
                                echo $tpphe;
                                echo "</td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                                $thsc = $_POST["hsc"];
                                $tshe = $_POST["pshe"];
                                $tppshe = $_POST["ppshe"];
                                echo "<td>";
                                echo $thsc;
                                echo "</td>";
                                echo "<td>";
                                echo $tshe;
                                echo "</td>";
                                echo "<td>";
                                echo $tppshe;
                                echo "</td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                                $tssc = $_POST["ssc"];
                                $tpthe = $_POST["pthe"];
                                $tppthe = $_POST["ppthe"];
                                echo "<td>";
                                echo $tssc;
                                echo "</td>";
                                echo "<td>";
                                echo $tpthe;
                                echo "</td>";
                                echo "<td>";
                                echo $tppthe;
                                echo "</td>";
                            ?>
                        </tr>
                    </table>
                </div>
                <div class="project">
                    <ul>
                        <li>
                            <h2>Projects</h2>
                            <ul>
                                <?php
                                    $npro = $_POST["pro"];
                                    for($i=0;$i<$npro;$i++)
                                    {
                                        $tprot = $_POST["prot$i"];
                                        $tprod = $_POST["prod$i"];
                                        echo "<li>";
                                        echo "<b>".$tprot."</b>";
                                            echo "<ul>";
                                                echo "<li>";
                                                echo "".$tprod;
                                                echo "</li>";
                                            echo "</ul>";
                                        echo "</li>";
                                        echo "<br>";
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="cc">
                    <ul>
                        <li>
                            <h2>Co-Cirricular:</h2>
                            <ul>
                                <?php
                                    $ncc = $_POST["cc"];
                                    for($i=0;$i<$ncc;$i++)
                                    {
                                        $tcct = $_POST["cct$i"];
                                        $tccd = $_POST["ccd$i"];
                                        echo "<li>";
                                        echo "<b>".$tcct."</b>";
                                            echo "<ul>";
                                                echo "<li>";
                                                echo "".$tccd;
                                                echo "</li>";
                                            echo "</ul>";
                                        echo "</li>";
                                        echo "<br>";
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="ec">
                    <ul>
                        <li>
                            <h2>Extra-Cirricular:</h2>
                            <ul>
                                <?php
                                    $nec = $_POST["ec"];
                                    for($i=0;$i<$nec;$i++)
                                    {
                                        $tect = $_POST["ect$i"];
                                        $tecd = $_POST["ecd$i"];
                                        echo "<li>";
                                        echo "<b>".$tect."</b>";
                                            echo "<ul>";
                                                echo "<li>";
                                                echo "".$tecd;
                                                echo "</li>";
                                            echo "</ul>";
                                        echo "</li>";
                                        echo "<br>";
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="cv/<?php 
                                    echo $filename1;
                                ?>" 
                    download="<?php
                                echo $filename1;
                            ?>" 
                    target="_blank">Download <?php echo $filename1; ?></a>
                </div>
            </div>
        </div>
        </form>

        <script>
            if(file_exists('./images/'.$result['image'].'.jpg')) 
            { 
                echo ' <img src="./images/'.$result['image'].'.jpg" alt="" style="width:100px;height:100px;">'; 
            }
            else
            { 
                echo '<img src="./imgages/no-image.jpg" alt=""  style="width:100px;height:100px;"/>'; 
            }
        </script>

    </body>
  
</html>