<script>
import View from '@/components/View'
import LoadSections from '@/mixins/load-sections'

export default {
  name: 'Home',
  extends: View,

  mixins: [
    LoadSections([
      'home-banner',
    ]),
  ],

  props: {
    id: {
      type: String,
      default: 'home',
    }
  }
}
</script>
