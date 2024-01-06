import { createApp } from "vue";
import Welcome from "./vue/Welcome.vue";

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faPlusSquare, faTrash, faPlusCircle } from '@fortawesome/free-solid-svg-icons';

/* add icons to the library */
library.add(faPlusSquare, faTrash, faPlusCircle);

const app = createApp(Welcome)
app.component("font-awesome-icon", FontAwesomeIcon)
app.mount('#app')
