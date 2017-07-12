/**
 * Created by j on 12/07/17.
 */
var clipboard = new Clipboard('.btn');

clipboard.on('success', function(e) {
    console.log(e);
});
clipboard.on('error', function(e) {
    console.log(e);
});