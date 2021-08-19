<form action="index.php" method="get">
    <div class="row">
        <div class="col-2">
            <input type="text" name="number1" placeholder="Enter number 1..." value="<?php
                if (isset($_GET['number1'])) {
                    echo $_GET['number1'];
                }
            ?>">
        </div>
        <div class="col-1">
            <select id="operator" name="operator">
                <option value="+" <?php if (isset($_GET['operator']) && $_GET['operator']=='+') {echo 'selected';}?>>+</option>
                <option value="-" <?php if (isset($_GET['operator']) && $_GET['operator']=='-') {echo 'selected';}?>>-</option>
                <option value="*" <?php if (isset($_GET['operator']) && $_GET['operator']=='*') {echo 'selected';}?>>*</option>
                <option value="/" <?php if (isset($_GET['operator']) && $_GET['operator']=='/') {echo 'selected';}?>>/</option>
            </select>
        </div>
        <div class="col-2">
            <input type="text" name="number2" placeholder="Enter number 2..." value="<?php
                if (isset($_GET['number2'])) {
                    echo $_GET['number2'];
                }
            ?>">
        </div>
        <div class="col-1"><button>Process...</button></div>
    </div>
</form>