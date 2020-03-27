@extends('site.layouts.template')

@section('conteudo')
<div class="agileinfo-gal">
    <div class="container">
    <h2 class="w3l_head w3l_head1">Galeria</h2>
        <div class="agileits_portfolio_grids">
            <div class="col-md-3 agileits_portfolio_grid">
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a1.jpg">
                        <img src="images/a1.jpg" alt=" " class="img-responsive">

                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a2.jpg">
                        <img src="images/a2.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a3.jpg">
                        <img src="images/a3.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-md-3 agileits_portfolio_grid">
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a4.jpg">
                        <img src="images/a4.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a5.jpg">
                        <img src="images/a5.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a6.jpg">
                        <img src="images/a6.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-md-3 agileits_portfolio_grid">
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a7.jpg">
                        <img src="images/a7.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a8.jpg">
                        <img src="images/a8.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a9.jpg">
                        <img src="images/a9.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-md-3 agileits_portfolio_grid">
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a10.jpg">
                        <img src="images/a10.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a11.jpg">
                        <img src="images/a11.jpg" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_portfolio_grid hovereffect">
                    <a class="cm-overlay" href="images/a12.jpg">
                        <img src="images/a12.jpg" alt=" " class="img-responsive">
                 </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
            <script src="js/jquery.tools.min.js"></script>
            <script src="js/jquery.mobile.custom.min.js"></script>
            <script src="js/jquery.cm-overlay.js"></script>
            <script>
                $(document).ready(function(){
                    $('.cm-overlay').cmOverlay();
                });
            </script>
    </div>
</div>
@endsection