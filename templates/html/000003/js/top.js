/**
 * RUN THE TIMELINE FROM JSON
 */
// var timeline_json = make_the_json(); // you write this part
var timeline_json = "assets/timeline.json";
var additionalOptions = {
  start_at_end: true,
  width: "100%",
  height: "80%",
}
// two arguments: the id of the Timeline container (no '#')
// and the JSON object or an instance of TL.TimelineConfig created from
// a suitable JSON object
window.timeline = new TL.Timeline('timeline-embed', timeline_json, additionalOptions);
