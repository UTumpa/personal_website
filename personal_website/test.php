<style>
    table#thumbnails{
        background-color:white;
    }
    table#thumbnails tr td img
    {
        cursor: pointer;
    }
</style>

<script type="text/javascript">
    function showImage(image){
        var mainImage = document.getElementById('mainImage');
        mainImage.src = image;
    }
    function toggleThumbnails(){
        var thumbnails = document.getElementById('thumbnails');
        if(thumbnails.style.display == 'block'){
            thumbnails.style.display = 'none';
        } else {
            thumbnails.style.display = 'block';
        }
    }
</script>
<input type="button" value="Show/hide thumbnail list" onclick="toggleThumbnails()" />
<table id="thumbnails" style="display:none;">
    <tr>
        <td><img src="tumpa.jpg" title="Item 1" onclick="showImage('img1.png')" /></td>
        <td><img src="thumb2.png" title="Item 2" onclick="showImage('img2.png')" /></td>
        <td><img src="thumb3.png" title="Item 3" onclick="showImage('img3.png')" /></td>
    </tr>
    <tr>
        <td><img src="thumb4.png" title="Item 4" onclick="showImage('img4.png')" /></td>
        <td><img src="thumb5.png" title="Item 5" onclick="showImage('img5.png')" /></td>
        <td><img src="thumb6.png" title="Item 6" onclick="showImage('img6.png')" /></td>
    </tr>
    <tr>