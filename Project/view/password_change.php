    <?php 
        include('teacher_header.php');
    ?>
                <fieldset>
                    <legend><h2><b>Password Change</b></h2></legend>
                    <form action="../controller/teacher_passChange.php" method="POST">
                        <table border="0">
                            <tr>
                                <td>
                                    Enter your ID
                                </td>
                                <td>:
                                    <input type="text" name="id" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    New Pssword
                                </td>
                                <td>:
                                    <input type="text" name="newP" id="">
                                </td>
                            </tr>
                            <tr>
                                <td align="right" colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="reset">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
    <?php 
        include('teacher_footer.php');
    ?>