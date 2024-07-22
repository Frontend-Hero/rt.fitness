<section class="rt-quick-contact">
    <?php if(is_page('26')): ?>
        <div class="wrapper">
    <?php endif; ?>
        <h2 class="rt-text-center">Get in touch today, and let’s create<br> a plan to <span class="rt-text-highlight">smash your goals!</span></h2>
        <p class="rt-text-center">In auctor gravida semper. Sedsagittis dui leo, vel gravida. 
        Nisl tristique in. Vestibulum efficitur sapien non massa.</p>

        <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]'); ?>
    
    <?php if(is_page('26')): ?>
        </div>
    <?php endif; ?>
</section>