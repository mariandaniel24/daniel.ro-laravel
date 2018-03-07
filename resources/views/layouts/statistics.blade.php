<div class="statistics-container unselectable">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 col-sm-3 col-md-3 col-lg-2 spacing">
                <div class="stats-box">
                    <div class="stats-icon">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="stats-info">
                        <p><span>{{$statistics_data[0]->hours}}</span> @lang('statistics.hours')</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-3 col-lg-2 spacing">
                <div class="stats-box">
                    <div class="stats-icon">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                    </div>
                    <div class="stats-info">
                        <p><span>{{$statistics_data[0]->coffees}}</span> @lang('statistics.coffees')</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-3 col-lg-2 spacing">
                <div class="stats-box">
                    <div class="stats-icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="stats-info">
                        <p><span>{{$statistics_data[0]->clients}}</span> @lang('statistics.clients')</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>