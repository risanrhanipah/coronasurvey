<html>
    <body>
        <form action="/answer" method="post">
            <?php echo csrf_field(); ?>
            pertanyaan nmr <?php echo e($nomor ?? ''); ?> dari 20
                <hr><br>
                    <br>
                <input type="radio" name="surv" value="ya"> YAAA <br>
                <input type="radio" name="surv" value="tidak"> tidac <br>
            <button type="submit" class="btn btn-primary-outline">muali</button>
        </form>
    </body>
</html>     <?php /**PATH /Users/danialabror/Documents/laravel/coronavirus/resources/views/survey/question.blade.php ENDPATH**/ ?>