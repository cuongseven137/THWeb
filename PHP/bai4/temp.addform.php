<div class="container" style="width: 1155px;margin: auto">
    <h3>Add Menu Item ...</h3>
    <form action="addnew.php" method="get">
        <div class="row">
            <div class="col-2">
                <input type="text" name="text" placeholder="Enter Text" value="New Item">
            </div>
            <div class="col-2">
                <input type="text" name="link" placeholder="Enter Link" value="#">
            </div>
            <div class="col-1"><button type="submit">Add to Menu</button></div>
            <input type="hidden" name="action" value="insert">
        </div>
    </form>
</div>