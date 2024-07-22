
<div class="container-fluid1">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>Fast launch. Fast results.</h2>
                <p class="script-font">Here's how.</p>
            </div>
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-3 text-center step-number" data-step="1">
                        01
                    </div>
                    <div class="col-9 step-title">
                        Segment
                    </div>
                </div>
                <div class="row step-description" data-step="1">
                    <div class="col-12">
                        <p>Segment your audience effectively.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center step-number" data-step="2">
                        02
                    </div>
                    <div class="col-9 step-title">
                        Design
                    </div>
                </div>
                <div class="row step-description" data-step="2">
                    <div class="col-12">
                        <p>Design personalized cards.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center step-number" data-step="3">
                        03
                    </div>
                    <div class="col-9 step-title">
                        Send
                    </div>
                </div>
                <div class="row step-description" data-step="3">
                    <div class="col-12">
                        <p>One-off announcements or automatically triggered flows. Customers receive their personalized cards within a week.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center step-number" data-step="4">
                        04
                    </div>
                    <div class="col-9 step-title">
                        Convert
                    </div>
                </div>
                <div class="row step-description" data-step="4">
                    <div class="col-12">
                        <p>Convert leads to customers.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center step-number" data-step="5">
                        05
                    </div>
                    <div class="col-9 step-title">
                        Optimize
                    </div>
                </div>
                <div class="row step-description" data-step="5">
                    <div class="col-12">
                        <p>Optimize your marketing strategies.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center step-number" data-step="6">
                        06
                    </div>
                    <div class="col-9 step-title">
                        Analyze
                    </div>
                </div>
                <div class="row step-description" data-step="6">
                    <div class="col-12">
                        <p>Analyze the performance of your campaigns.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-center step-number" data-step="7">
                        07
                    </div>
                    <div class="col-9 step-title">
                        Scale
                    </div>
                </div>
                <div class="row step-description" data-step="7">
                    <div class="col-12">
                        <p>Scale your business effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const steps = document.querySelectorAll('.step-number, .step-title');
        steps.forEach(step => {
            step.addEventListener('click', function () {
                const stepNumber = this.getAttribute('data-step');
                document.querySelectorAll('.step-description').forEach(desc => {
                    desc.style.display = desc.getAttribute('data-step') === stepNumber ? 'block' : 'none';
                });
                document.querySelectorAll('.step-number, .step-title').forEach(step => {
                    step.style.color = step.getAttribute('data-step') === stepNumber ? 'black' : '#39BEB8';
                });
            });
        });
    });
</script>