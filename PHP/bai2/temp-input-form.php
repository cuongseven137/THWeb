<div class="container">

    <h2>Tính toán đơn giản 2 số</h2>
    <form action="index.php" method="get">

        <div class="row">
            <div class="col">
                <input type="text" name="so1" id="so1" placeholder="Nhập số thứ nhất" value="<?php if (isset($_GET["so1"])) {echo $_GET["so1"];}?>">
            </div>
            <div class="col">
                <input type="radio" id="plus" name="operator" value="+" checked="checked">
                <label for="plus">Cộng</label>
                <input type="radio" id="minus" name="operator" value="-">
                <label for="minus">Trừ</label>
                <input type="radio" id="multiple" name="operator" value="*">
                <label for="multiple">Nhân</label>
                <input type="radio" id="division" name="operator" value="/">
                <label for="division">Chia</label>
            </div>
            <div class="col">
                <input type="text" name="so2" id="so2" placeholder="Nhập số thứ hai" value="<?php if (isset($_GET["so2"])) {echo $_GET["so2"];}?>">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p>Kết quả tính toán: <strong>xxxxxx</strong></p>
            </div>
            <div class="col"><input type="submit" value="Tính kết quả"></div>
        </div>

    </form>
</div>