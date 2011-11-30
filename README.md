youORMe
=======

**youORMe** is a mini-framework for rapid development of database access. It is bult on PDO, and uses a simple Object-Oriented architecture to enable developers to quickly create classes that will access single database records or collections of such records.

The `Database` class itself is not the best way to do things, but it accomplishes the task.

The `DBRecord` class is a class that is meant to be extended. The subclasses should define the columns, id column, and table name that is meant to be accessed, as well as any special methods of setting, retrieving, or utilizing the data therein.

The `Collection` class is a class that is meant to be extended. The subclasses should define a new constructor, which calls the parent constructor with an argument equal to a new instance of the class which is to be contained in the collection (the reference type). It should also define `getBy`, which calls `parent::getData()`, and fills `elements` with new instances of the reference type, each containing that data.

The `Renderer` class requires Smarty templates, and allows the developer to easily use "layout" style templates, and add content to those layouts.

**Example code to be added**