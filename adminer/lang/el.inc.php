<?php
namespace Adminer;

$translations = array(
	// label for database system selection (MySQL, SQLite, ...)
	'System' => 'Σύστημα',
	'Server' => 'Διακομιστής',
	'Username' => 'Όνομα Χρήστη',
	'Password' => 'Κωδικός',
	'Permanent login' => 'Μόνιμη Σύνδεση',
	'Login' => 'Σύνδεση',
	'Logout' => 'Αποσύνδεση',
	'Logged as: %s' => 'Συνδεθήκατε ως %s',
	'Logout successful.' => 'Αποσυνδεθήκατε με επιτυχία.',
	'Invalid credentials.' => 'Εσφαλμένα Διαπιστευτήρια.',
	'Too many unsuccessful logins, try again in %d minute(s).' => array('Επανειλημμένες ανεπιτυχείς προσπάθειες σύνδεσης, δοκιμάστε ξανά σε %s λεπτό.', 'Επανειλημμένες ανεπιτυχείς προσπάθειες σύνδεσης, δοκιμάστε ξανά σε %s λεπτά.'),
	'Master password expired. <a href="https://www.adminer.org/en/extension/"%s>Implement</a> %s method to make it permanent.' => 'Έληξε ο Κύριος Κωδικός. <a href="https://www.adminer.org/en/extension/"%s>Ενεργοποιήστε</a> τη μέθοδο %s για να τον κάνετε μόνιμο.',
	'Language' => 'Γλώσσα',
	'Invalid CSRF token. Send the form again.' => 'Άκυρο κουπόνι CSRF. Στείλτε τη φόρμα ξανά.',
	'If you did not send this request from Adminer then close this page.' => 'Αν δε στείλατε αυτό το αίτημα από το Adminer, τότε κλείστε αυτή τη σελίδα.',
	'No extension' => 'Καμία Επέκταση',
	'None of the supported PHP extensions (%s) are available.' => 'Καμία από τις υποστηριζόμενες επεκτάσεις PHP (%s) δεν είναι διαθέσιμη.',
	'Session support must be enabled.' => 'Πρέπει να είναι ενεργοποιημένη η υποστήριξη συνεδριών.',
	'Session expired, please login again.' => 'Η συνεδρία έληξε, παρακαλώ συνδεθείτε ξανά.',
	'%s version: %s through PHP extension %s' => '%s έκδοση: %s μέσω επέκτασης PHP %s',
	'Refresh' => 'Ανανέωση',

	// text direction - 'ltr' or 'rtl'
	'ltr' => 'ltr',

	'Privileges' => 'Δικαιώματα',
	'Create user' => 'Δημιουργία Χρήστη',
	'User has been dropped.' => 'Ο Χρήστης διαγράφηκε.',
	'User has been altered.' => 'Ο Χρήστης τροποποιήθηκε.',
	'User has been created.' => 'Ο Χρήστης δημιουργήθηκε.',
	'Hashed' => 'Κωδικοποιήθηκε',
	'Column' => 'Στήλη',
	'Routine' => 'Ρουτίνα',
	'Grant' => 'Παραχώρηση',
	'Revoke' => 'Ανάκληση',

	'Process list' => 'Λίστα διεργασιών',
	'%d process(es) have been killed.' => array('Τερματίστηκε %d διεργασία.', 'Τερματίστηκαν %d διεργασίες.'),
	'Kill' => 'Τερματισμός',

	'Variables' => 'Μεταβλητές',
	'Status' => 'Κατάσταση',

	'SQL command' => 'Εντολή SQL',
	'%d query(s) executed OK.' => array('Το ερώτημα %d εκτελέστηκε ΟΚ.', 'Τα ερώτηματα %d εκτελέστηκαν ΟΚ.'),
	'Query executed OK, %d row(s) affected.' => array('Το ερώτημα εκτελέστηκε ΟΚ, επηρεάστηκε %d σειρά.', 'Το ερώτημα εκτελέστηκε ΟΚ, επηρεάστηκαν %d σειρές.'),
	'No commands to execute.' => 'Δεν υπάρχουν εντολές να εκτελεστούν.',
	'Error in query' => 'Σφάλμα στο ερώτημα',
	'Execute' => 'Εκτέλεση',
	'Stop on error' => 'Διακοπή όταν υπάρχει σφάλμα',
	'Show only errors' => 'Να εμφανίζονται μόνο τα σφάλματα',
	// sprintf() format for time of the command
	'%.3f s' => '%.3f s',
	'History' => 'Ιστορικό',
	'Clear' => 'Καθαρισμός',
	'Edit all' => 'Επεξεργασία όλων',

	'File upload' => 'Μεταφόρτωση αρχείου',
	'From server' => 'Από διακομιστή',
	'Webserver file %s' => 'Αρχείο %s από διακομιστή web',
	'Run file' => 'Εκτέλεση αρχείου',
	'File does not exist.' => 'Το αρχείο δεν υπάρχει.',
	'File uploads are disabled.' => 'Έχει απενεργοποιηθεί η μεταφόρτωση αρχείων.',
	'Unable to upload a file.' => 'Αδυναμία μεταφόρτωσης αρχείου.',
	'Maximum allowed file size is %sB.' => 'Το μέγιστο επιτρεπόμενο μέγεθος αρχείου είναι %sB.',
	'Too big POST data. Reduce the data or increase the %s configuration directive.' => 'Πολλά δεδομένα POST. Μείωστε τα περιεχόμενα ή αυξήστε την σχετική ρύθμιση %s.',
	'You can upload a big SQL file via FTP and import it from server.' => 'Μπορείτε να μεταφορτώσετε ένα μεγάλο αρχείο SQL μέσω FTP και να το εισάγετε από το διακομιστή.',
	'You are offline.' => 'Βρίσκεστε εκτός σύνδεσης.',

	'Export' => 'Εξαγωγή',
	'Output' => 'Αποτέλεσμα',
	'open' => 'άνοιγμα',
	'save' => 'αποθήκευση',
	'Saving' => 'Γίνεται Αποθήκευση',
	'Format' => 'Μορφή',
	'Data' => 'Δεδομένα',

	'Database' => 'Β. Δεδομένων',
	'Use' => 'χρήση',
	'Select database' => 'Επιλέξτε Β.Δ.',
	'Invalid database.' => 'Λανθασμένη Β.Δ.',
	'Database has been dropped.' => 'Η Β.Δ. διαγράφηκε.',
	'Databases have been dropped.' => 'Οι Β.Δ. διαγράφηκαν.',
	'Database has been created.' => 'Η Β.Δ. δημιουργήθηκε.',
	'Database has been renamed.' => 'Η. Β.Δ. μετονομάστηκε.',
	'Database has been altered.' => 'Η Β.Δ. τροποποιήθηκε.',
	'Alter database' => 'Τροποποίηση Β.Δ.',
	'Create database' => 'Δημιουργία Β.Δ.',
	'Database schema' => 'Σχήμα Β.Δ.',

	// link to current database schema layout
	'Permanent link' => 'Μόνιμος Σύνδεσμος',

	// thousands separator - must contain single byte
	',' => '.',
	'0123456789' => '0123456789',
	'Engine' => 'Μηχανή',
	'Collation' => 'Collation',
	'Data Length' => 'Μήκος Δεδομένων',
	'Index Length' => 'Μήκος Δείκτη',
	'Data Free' => 'Δεδομένα Ελεύθερα',
	'Rows' => 'Σειρές',
	'%d in total' => '%d συνολικά',
	'Analyze' => 'Ανάλυση',
	'Optimize' => 'Βελτιστοποίηση',
	'Vacuum' => 'Καθαρισμός',
	'Check' => 'Έλεγχος',
	'Repair' => 'Επιδιόρθωση',
	'Truncate' => 'Περικοπή',
	'Tables have been truncated.' => 'Οι πίνακες περικόπηκαν.',
	'Move to other database' => 'Μεταφορά σε άλλη Β.Δ.',
	'Move' => 'Μεταφορά',
	'Tables have been moved.' => 'Οι πίνακες μεταφέρθηκαν.',
	'Copy' => 'Αντιγραφή',
	'Tables have been copied.' => 'Οι πίνακες αντιγράφηκαν.',

	'Routines' => 'Ρουτίνες',
	'Routine has been called, %d row(s) affected.' => array('Η ρουτίνα εκτελέστηκε, επηρεάστηκε %d σειρά.', 'Η ρουτίνα εκτελέστηκε, επηρεάστηκαν %d σειρές.'),
	'Call' => 'Εκτέλεση',
	'Parameter name' => 'Όνομα παραμέτρου',
	'Create procedure' => 'Δημιουργία διαδικασίας',
	'Create function' => 'Δημιουργία Συνάρτησης',
	'Routine has been dropped.' => 'Η ρουτίνα διαγράφηκε.',
	'Routine has been altered.' => 'Η ρουτίνα τροποποιήθηκε.',
	'Routine has been created.' => 'Η ρουτίνα δημιουργήθηκε.',
	'Alter function' => 'Τροποποίηση λειτουργίας',
	'Alter procedure' => 'Τροποποίηση διαδικασίας',
	'Return type' => 'Επιστρεφόμενος τύπος',

	'Events' => 'Γεγονός',
	'Event has been dropped.' => 'Το γεγονός διαγράφηκε.',
	'Event has been altered.' => 'Το γεγονός τροποποιήθηκε.',
	'Event has been created.' => 'Το γεγονός δημιουργήθηκε.',
	'Alter event' => 'Τροποποίηση γεγονότος',
	'Create event' => 'Δημιουργία γεγονότος',
	'At given time' => 'Σε προκαθορισμένο χρόνο',
	'Every' => 'Κάθε',
	'Schedule' => 'Προγραμματισμός',
	'Start' => 'Έναρξη',
	'End' => 'Λήξη',
	'On completion preserve' => 'Κατά την ολοκλήρωση διατήρησε',

	'Tables' => 'Πίνακες',
	'Tables and views' => 'Πίνακες και Προβολές',
	'Table' => 'Πίνακας',
	'No tables.' => 'Χωρίς πίνακες.',
	'Alter table' => 'Τροποποίηση πίνακα',
	'Create table' => 'Δημιουργία πίνακα',
	'Table has been dropped.' => 'Ο πίνακας διαγράφηκε.',
	'Tables have been dropped.' => 'Οι πίνακες διαγράφηκαν.',
	'Tables have been optimized.' => 'Οι πίνακες βελτιστοποιήθηκαν.',
	'Table has been altered.' => 'Ο πίνακας τροποποιήθηκε.',
	'Table has been created.' => 'Ο πίνακας δημιουργήθηκε.',
	'Table name' => 'Όνομα πίνακα',
	'Show structure' => 'Προβολή δομής',
	'engine' => 'μηχανή',
	'collation' => 'collation',
	'Column name' => 'Όνομα στήλης',
	'Type' => 'Τύπος',
	'Length' => 'Μήκος',
	'Auto Increment' => 'Αυτόματη αρίθμηση',
	'Options' => 'Επιλογές',
	'Comment' => 'Σχόλιο',
	'Default value' => 'Προεπιλεγμένη τιμή',
	'Default values' => 'Προεπιλεγμένες τιμές',
	'Drop' => 'Διαγραφή',
	'Are you sure?' => 'Είστε σίγουρος;',
	'Size' => 'Μέγεθος',
	'Compute' => 'Υπολογισμός',
	'Move up' => 'Μετακίνηση προς τα επάνω',
	'Move down' => 'Μετακίνηση προς τα κάτω',
	'Remove' => 'Αφαίρεση',
	'Maximum number of allowed fields exceeded. Please increase %s.' => 'Υπέρβαση μέγιστου επιτρεπόμενου αριθμού πεδίων. Παρακαλώ αυξήστε %s.',

	'Partition by' => 'Τμηματοποίηση ανά',
	'Partitions' => 'Τμήματα',
	'Partition name' => 'Όνομα Τμήματος',
	'Values' => 'Τιμές',

	'View' => 'Προβολή',
	'Materialized view' => 'Υλοποιημένη προβολή',
	'View has been dropped.' => 'Η προβολή διαγράφηκε.',
	'View has been altered.' => 'Η προβολή τροποποιήθηκε.',
	'View has been created.' => 'Η προβολή δημιουργήθηκε.',
	'Alter view' => 'Τροποποίηση προβολής',
	'Create view' => 'Δημιουργία προβολής',

	'Indexes' => 'Δείκτες',
	'Indexes have been altered.' => 'Οι δείκτες τροποποιήθηκαν.',
	'Alter indexes' => 'Τροποποίηση δεικτών',
	'Add next' => 'Προσθήκη επόμενου',
	'Index Type' => 'Τύπος δείκτη',
	'length' => 'μήκος',

	'Foreign keys' => 'Εξαρτημένα κλειδιά',
	'Foreign key' => 'Εξαρτημένο κλειδί',
	'Foreign key has been dropped.' => 'Το εξαρτημένο κλειδί διαγράφηκε.',
	'Foreign key has been altered.' => 'Το εξαρτημένο κλειδί τροποποιήθηκε.',
	'Foreign key has been created.' => 'Το εξαρτημένο κλειδί δημιουργήθηκε.',
	'Target table' => 'Πίνακας Στόχος',
	'Change' => 'Αλλαγή',
	'Source' => 'Πηγή',
	'Target' => 'Στόχος',
	'Add column' => 'Προσθήκη στήλης',
	'Alter' => 'Τροποποίηση',
	'Add foreign key' => 'Προσθήκη εξαρτημένου κλειδιού',
	'ON DELETE' => 'ΚΑΤΑ ΤΗ ΔΙΑΓΡΑΦΗ',
	'ON UPDATE' => 'ΚΑΤΑ ΤΗΝ ΑΛΛΑΓΗ',
	'Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.' => 'Οι στήλες στην πηγή και το στόχο πρέπει να έχουν τον ίδιο τύπο, πρέπει να υπάρχει δείκτης στη στήλη στόχο και να υπάρχουν εξαρτημένα δεδομένα.',

	'Triggers' => 'Εναύσματα',
	'Add trigger' => 'Προσθήκη εναύσματος',
	'Trigger has been dropped.' => 'Το έναυσμα διαγράφηκε.',
	'Trigger has been altered.' => 'Το έναυσμα τροποποιήθηκε.',
	'Trigger has been created.' => 'Το έναυσμα δημιουργήθηκε.',
	'Alter trigger' => 'Τροποποίηση εναύσματος',
	'Create trigger' => 'Δημιουργία εναύσματος',
	'Time' => 'Ώρα',
	'Event' => 'Γεγονός',
	'Name' => 'Όνομα',

	'select' => 'επιλογή',
	'Select' => 'Επιλογή',
	'Select data' => 'Επιλέξτε δεδομένα',
	'Functions' => 'Λειτουργίες',
	'Aggregation' => 'Άθροισμα',
	'Search' => 'Αναζήτηση',
	'anywhere' => 'παντού',
	'Search data in tables' => 'Αναζήτηση δεδομένων στους πίνακες',
	'Sort' => 'Ταξινόμηση',
	'descending' => 'Φθίνουσα',
	'Limit' => 'Όριο',
	'Limit rows' => 'Περιορισμός σειρών',
	'Text length' => 'Μήκος κειμένου',
	'Action' => 'Ενέργεια',
	'Full table scan' => 'Πλήρης σάρωση πινάκων',
	'Unable to select the table' => 'Δεν είναι δυνατή η επιλογή πίνακα',
	'No rows.' => 'Χωρίς σειρές.',
	'%d / ' => '%d / ',
	'%d row(s)' => array('%d σειρά', '%d σειρές'),
	'Page' => 'Σελίδα',
	'last' => 'τελευταία',
	'Load more data' => 'Φόρτωση κι άλλων δεδομένων',
	'Loading' => 'Φορτώνει',
	'Whole result' => 'Όλο το αποτέλεσμα',
	'%d byte(s)' => array('%d byte', '%d bytes'),

	'Import' => 'Εισαγωγή',
	'%d row(s) have been imported.' => array('$d σειρά εισήχθη.', '%d σειρές εισήχθησαν.'),
	'File must be in UTF-8 encoding.' => 'Το αρχείο πρέπει να έχει κωδικοποίηση UTF-8.',

	// in-place editing in select
	'Modify' => 'Τροποποίηση',
	'Ctrl+click on a value to modify it.' => 'Πιέστε Ctrl+click σε μια τιμή για να την τροποποιήσετε.',
	'Use edit link to modify this value.' => 'Χρησιμοποιήστε το σύνδεσμο επεξεργασία για να τροποποιήσετε την τιμή.',

	// %s can contain auto-increment value
	'Item%s has been inserted.' => 'Η εγγραφή%s εισήχθη.',
	'Item has been deleted.' => 'Η εγγραφή διαγράφηκε.',
	'Item has been updated.' => 'Η εγγραφή ενημερώθηκε.',
	'%d item(s) have been affected.' => array('Επηρεάστηκε %d εγγραφή.', 'Επηρεάστηκαν %d εγγραφές.'),
	'New item' => 'Νέα εγγραφή',
	'original' => 'πρωτότυπο',
	// label for value '' in enum data type
	'empty' => 'κενό',
	'edit' => 'επεξεργασία',
	'Edit' => 'Επεξεργασία',
	'Insert' => 'Εισαγωγή',
	'Save' => 'Αποθήκευση',
	'Save and continue edit' => 'Αποθήκευση και συνέχεια επεξεργασίας',
	'Save and insert next' => 'Αποθήκευση και εισαγωγή επόμενου',
	'Selected' => 'Επιλεγμένα',
	'Clone' => 'Κλωνοποίηση',
	'Delete' => 'Διαγραφή',
	'You have no privileges to update this table.' => 'Δεν έχετε δικαίωμα να τροποποιήσετε αυτό τον πίνακα.',

	'E-mail' => 'E-mail',
	'From' => 'Από',
	'Subject' => 'Θέμα',
	'Attachments' => 'Συνημμένα',
	'Send' => 'Αποστολή',
	'%d e-mail(s) have been sent.' => array('%d e-mail απεστάλη.', '%d e-mail απεστάλησαν.'),

	// data type descriptions
	'Numbers' => 'Αριθμοί',
	'Date and time' => 'Ημερομηνία και ώρα',
	'Strings' => 'Κείμενο',
	'Binary' => 'Δυαδικό',
	'Lists' => 'Λίστες',
	'Network' => 'Δίκτυο',
	'Geometry' => 'Γεωμετρία',
	'Relations' => 'Συσχετήσεις',

	'Editor' => 'Επεξεργαστής',
	// date format in Editor: $1 yyyy, $2 yy, $3 mm, $4 m, $5 dd, $6 d
	'$1-$3-$5' => '$5/$3/$1',
	// hint for date format - use language equivalents for day, month and year shortcuts
	'[yyyy]-mm-dd' => 'ηη/μμ/[εεεε]',
	// hint for time format - use language equivalents for hour, minute and second shortcuts
	'HH:MM:SS' => 'ΩΩ:ΛΛ:ΔΔ',
	'now' => 'τώρα',
	'yes' => 'ναι',
	'no' => 'όχι',

	// general SQLite error in create, drop or rename database
	'File exists.' => 'Το αρχείο υπάρχει.',
	'Please use one of the extensions %s.' => 'Παρακαλώ χρησιμοποιείστε μια από τις επεκτάσεις %s.',

	// PostgreSQL and MS SQL schema support
	'Alter schema' => 'Τροποποίηση σχήματος',
	'Create schema' => 'Δημιουργία σχήματος',
	'Schema has been dropped.' => 'Το σχήμα διαγράφηκε.',
	'Schema has been created.' => 'Το σχήμα δημιουργήθηκε.',
	'Schema has been altered.' => 'Το σχήμα τροποποιήθηκε.',
	'Schema' => 'Σχήμα',
	'Invalid schema.' => 'Άκυρο σχήμα.',

	// PostgreSQL sequences support
	'Sequences' => 'Αλληλουχία',
	'Create sequence' => 'Δημιουργία αλληλουχίας',
	'Sequence has been dropped.' => 'Η αλληλουχία διαγράφηκε.',
	'Sequence has been created.' => 'Η αλληλουχία δημιουργήθηκε.',
	'Sequence has been altered.' => 'Η αλληλουχία τροποποιήθηκε.',
	'Alter sequence' => 'Τροποποίηση αλληλουχίας',

	// PostgreSQL user types support
	'User types' => 'Τύποι χρήστη',
	'Create type' => 'Δημιουργία τύπου',
	'Type has been dropped.' => 'Ο τύπος διαγράφηκε.',
	'Type has been created.' => 'Ο τύπος δημιουργήθηκε.',
	'Alter type' => 'Τροποποίηση τύπου',
);

// run `php ../../lang.php el` to update this file
