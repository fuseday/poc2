<div>
    <div class="mt-12">
        <weather-card-1></weather-card-1>
    </div>

    <div class="mt-12">
        <weather-card-1>
            <template v-slot:city> Leiria </template>
            <template v-slot:time> {{ now() }} Some clouds </template>
            <template v-slot:temperature="scope">
                {{ random_int(12, 35) }} @{{ scope.temperatureUnit }}
            </template>
        </weather-card-1>
    </div>
</div>
