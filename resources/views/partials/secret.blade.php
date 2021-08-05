<div>
    <v-card
        class="mx-auto mt-16"
        color="#26c6da"
        dark
        max-width="400"
    >
        <v-card-title>
            <v-icon
                large
                left
            >
                mdi-emoticon-cool
            </v-icon>
            <span class="text-h6 font-weight-light">Here's a joke</span>
        </v-card-title>

        <v-card-text class="text-h5 font-weight-bold">
            @lang('chuck-norris.joke', [], 'en')
        </v-card-text>

        <v-card-actions>
            <v-list-item class="grow">
                @can('see-secret-stuff')
                <delete-joke />
                @endcan

                <x-joke-counters like-icon="mdi-heart" :share-icon="$shareIcon" />
            </v-list-item>
        </v-card-actions>
    </v-card>
</div>
