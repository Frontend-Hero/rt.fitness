<section class="personal-training-faq accordion">
    <div class="wrapper">
        <h2 class="rt-text-center">Frequently Asked Questions</h2>
        
        <div class="grid">
            
            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">Title</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Content...</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">Title</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Content...</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item grid-span-12">
                <h3 class="accordion-title">Title</h3>
                <div class="accordion-content">
                    <div class="accordion-content-inner">
                        <p>Content...</p>
                    </div>
                </div>
            </div>
           
        </div>
        
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionTitles = document.querySelectorAll('.accordion-title');

    accordionTitles.forEach(title => {
        title.addEventListener('click', function() {
            const accordionItem = title.parentElement;

            // Check if currently clicked item is open
            const isCurrentlyOpen = accordionItem.classList.contains('active');

            // Close all sections
            document.querySelectorAll('.accordion-item').forEach(item => {
                item.classList.remove('active');
            });

            // If the clicked item was not open before, open it now
            if (!isCurrentlyOpen) {
                accordionItem.classList.add('active');
            }
        });
    });
});
</script>