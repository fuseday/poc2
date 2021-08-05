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

                <v-row
                    align="center"
                    justify="end"
                >
                    <v-icon class="mr-1">
                        mdi-heart
                    </v-icon>
                    <span class="subheading mr-2">256</span>
                    <span class="mr-1">·</span>
                    <v-icon class="mr-1">
                        mdi-share-variant
                    </v-icon>
                    <span class="subheading">45</span>
                </v-row>
            </v-list-item>
        </v-card-actions>
    </v-card>
</div>
