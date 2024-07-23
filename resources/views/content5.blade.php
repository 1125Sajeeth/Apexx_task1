<section class="content-section">
    <div class="container">
        <div class="content6 text-center">
            <h1 class="main-title">Fast launch. Fast results.</h1>
            <p class="subtitle1">Here's how.</p>
        </div>
        <div class="row">
            <div class="col-md-6 steps-container">
                <div class="step" onclick="toggleDescription(this)">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <div class="step-title">Segment</div>
                    </div>
                </div>
                <div class="step" onclick="toggleDescription(this)">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <div class="step-title">Design</div>
                    </div>
                </div>
                <div class="step" onclick="toggleDescription(this)">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <div class="step-title">Send</div>
                        <p class="step-description">One-off announcements or automatically triggered flows. Customers receive their personalized cards within a week.</p>
                    </div>
                </div>
                <div class="step" onclick="toggleDescription(this)">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <div class="step-title">Convert</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<script>
    function toggleDescription(step) {
        const description = step.querySelector('.step-description');
        if (description) {
            description.style.display = description.style.display === 'block' ? 'none' : 'block';
        }
    }
</script>