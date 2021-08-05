<v-row
    align="center"
    justify="end"
>
    <v-icon class="mr-1">
        {{ $likeIcon }}
    </v-icon>
    <span class="subheading mr-2">
        {{ $likeCount }}
    </span>
    <span class="mr-1">·</span>
    <v-icon class="mr-1">
        {{ $shareIcon }}
    </v-icon>
    <span class="subheading">
        {{ $shareCount }}
    </span>
</v-row>
