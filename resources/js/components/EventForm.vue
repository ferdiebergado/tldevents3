<template>
  <div class="container">
    <form>
      <fieldset class="form-group row">
        <legend class="col-form-legend col-sm-1-12">New Event</legend>
        <div class="col-sm-1-12">Fill up the fields with information about the event.</div>
        <div class="form-group">
          <label for="eventTitle">Title*</label>
          <input
            type="text"
            name="eventTitle"
            id="eventTitle"
            class="form-control"
            placeholder="The title of the event."
            aria-describedby="titleHelp"
            required
          />
          <small id="titleHelp" class="text-muted">The title of the workshop/training/conference.</small>
        </div>
        <div class="form-group">
          <label for="venue">Venue</label>
          <input
            type="text"
            name="venue"
            id="venue"
            class="form-control"
            placeholder="The venue of the event."
            aria-describedby="eventHelp"
            v-model="venue"
          />
          <small
            id="eventHelp"
            class="text-muted"
          >The hotel/training center wherein the event will be conducted.</small>
        </div>
      </fieldset>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <button
            type="submit"
            class="btn btn-primary push-right"
            :disabled="isSubmitted"
            @click.prevent="createEvent"
          >{{ btntext }}</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "EventForm",
  data() {
    return {
      isSubmitted: false,
      btntext: "Submit",
      title: "",
      venue: ""
    };
  },
  methods: {
    createEvent() {
      this.isSubmitted = true;
      this.btntext = "Please wait...";
    }
  }
};
</script>

