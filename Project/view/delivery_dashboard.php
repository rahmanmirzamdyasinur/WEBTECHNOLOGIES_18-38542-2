<?php 
        include('delivery_header.php');

    ?>
                
                <table border="0" style="font-size: 22px;">
                    <tr>
                        <th colspan="0"><h2>Welcome to AtoZ.com</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                if(isset($_COOKIE['class0'])){
                                    echo "Class: ".$_COOKIE['class0']." | ";
                                    echo "Start Time: ".$_COOKIE['startTime0']." | ";
                                    echo "End Time: ".$_COOKIE['endTime0']." | ";
                                    echo "Subject: ".$_COOKIE['subject0'];
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                if(isset($_COOKIE['class1'])){
                                    echo "Class: ".$_COOKIE['class1']." | ";
                                    echo "Start Time: ".$_COOKIE['startTime1']." | ";
                                    echo "End Time: ".$_COOKIE['endTime1']." | ";
                                    echo "Subject: ".$_COOKIE['subject1'];
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                if(isset($_COOKIE['class2'])){
                                    echo "Class: ".$_COOKIE['class2']." | ";
                                    echo "Start Time: ".$_COOKIE['startTime2']." | ";
                                    echo "End Time: ".$_COOKIE['endTime2']." | ";
                                    echo "Subject: ".$_COOKIE['subject2'];
                                }
                            ?>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <?php 
                                if(isset($_COOKIE['class3'])){
                                    echo "Class: ".$_COOKIE['class3']." | ";
                                    echo "Start Time: ".$_COOKIE['startTime3']." | ";
                                    echo "End Time: ".$_COOKIE['endTime3']." | ";
                                    echo "Subject: ".$_COOKIE['subject3'];
                                }
                            ?>
                        </td>
                        </tr>
                    </tr>
                </table>
    
    <?php 
        include('delivery_footer.php');
    ?>      