<h2>Cronograma</h2>

<ul id="timeline" class="timeline">
    <li v-for="(index, item) in timeline" :class="{ 'timeline-inverted': index % 2 }">
        <div class="timeline-badge info"><i class=""></i></div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4 class="timeline-title">@{{ item.title }}</h4>
                <p>@{{ item.period }}</p>

                @include('2016.partials.timeline-countdown')
            </div>
        </div>
    </li>

    <li class="timeline-inverted">
        <div class="timeline-end"><i class=""></i></div>
    </li>
</ul>
