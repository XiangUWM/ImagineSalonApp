# ImagineSalonApp

## More Information

In order for this project to be a success, we need to develop a consistency plan for performance. 

### Planning

#### The Agenda 

Build a scheduling and inventory management web application for Imagine Salon. At the moment, the current system is outdated, overly complicated, and unfortunately they're paying $75 monthly for it. It is our goal to create a user-friendly tabular interface to facilitate day-to-day business activities. 

### Presentation 

We will need to: 

+ Create a scheduling service that keeps track of clients and staff. 
+ Create an inventory management system that keeps track of inventory.
+ Migrate the data for the staff and 250 customers to the proposed system to demonstrate functionality. 
+ Demonstrate usage with a series of tutorial videos. 

### Implementation

#### Tech Stack
+ Text editor (i.e.: Atom.io, Brackets, Dreamweaver, Notepad++)
+ Apache server (i.e.: WAMP(for Windows), MAMP, or XAMP(for iOS))
+ Atlassian JIRA
+ PHP
+ MySQL
+ JavaScript
+ jQuery
+ Bootstrap
+ HTML
+ CSS
+ Google Drive
+ Google Hangouts
+ Atlassian HipChat
+ GitHub

### Communication 

We are required by the course to commuicate in group meetings two times per week at minimum that will take the place of daily sprint meetings. We need to choose a time for everyone to be available to hold these meetings on Google Hangouts. In addition to the twice-per-week status meetings. We will need to access HipChat regularly for task and activity planning updates as Hangouts does not incorporate sprint information from JIRA. As time continues, we will phase out the usage of Hangouts and work strictly on HipChat for increased workflow efficiency. Please schedule 20 uninterrupted minutes for the scrum meetings.

The first meeting we will need to address introductions, inform each other of our experience levels, ask questions, and give individual expectations of the project. 

#### Daily Scrum Meetings

As previously mentioned, these will occur twice a week. An efficient scrum meeting addresses the following: 
+ What did you do since the last scrum meeting?
+ What will you do until the next scrum meeting?
+ Are there any impediments in your way?

These meetings will go by much faster if you have these responses prepared. This is just a way to fill everyone in on what you're doing. 

#### Communication in JIRA

For our group to get the best possible use out of JIRA, I can share some tips that I've collected through my use of it. 

When handling a ticket/issue/sub-task, keep in mind that we all have to peer-review each other's work. Putting comments in the work log is the best way to let each other know what's going on. It seriously helps to open up a simple notepad application and use the template I've made below. Sometimes you forget to create a work log for what you've done. Opening a work log in your notepad soon as you assign yourself to a ticket helps you keep track of everything you've done so you can accurately report your work. 

---
##### Example Template for Work Log

**Issue Name:** XIAN-001 - Connect Slim Framework to MySQL Database 

**Current Date:** February 29, 2016

**Current Time:** 4:55pm

**Start Timestamp:** February 28, 2016 10:36pm

**End Timestamp:** February 29, 2016 4:50pm


**Issue File Location:** Folder/SubFolder/File.js, Folder/AnotherSubFolder/AnotherFile.html

**Issue Line Location:** File.js lines 118-125, AnotherFile.js lines 36-48


**What needed to be fixed:** The Slim Framework needed to be connected to the MySQL database. 


**How it has been fixed:** I declared the foo and the bar. Then afterwards I implemented the foo and called the bar. Subsequently, I was able to get an output for the bar. Once I did that, I was able to connect the database. 


```javascript
var foo = "This is the foo.";
var bar = function(foo) {
  return foo;
}
console.log(bar(foo));
alert(s);
```

**What still needs to be fixed:** Line 120 of File.js is calling the wrong bar. It keeps calling global bar. I cannot figure out why. 

**How to test:** You need to put the foo in the bar function as (7), and then check the output. If foo = 7, then it works. 

---
### JIRA Issues and GitHub Branches

Please make a new branch in GitHub for every issue you're working on. The reason for this is clarity. When we peer review each other's work, we can pull the branch named after the issue. This also helps your work from getting corrupted. Please do not make a branch off of a branch and please do not update your master branches to your recent work. Rebase your masters from the origin only. Soon as you commit your work, push it upstream to the origin, and send the issue to peer-review, it will be reviewed, and implemented right away for all of us to use and rebase our work off of. If you implement these methods, you will be able to work and need very little communication from the group. 

####Example of the GitHub repository structure: 
<pre>
Origin
  Omie_Master
      Test-branch
      XIAN-1_Branch-Name
      XIAN-2_Branch-Name
      XIAN-3_Branch-Name
  Josh_Master
      Test-branch
      XIAN-1_Branch-Name
      XIAN-4_Branch-Name
      XIAN-5_Branch-Name
</pre>

#### 12-step Issue Completion To-Do List: 
+ Check for updates via JIRA
+ Assign yourself to the issue if this is a new issue
+ Start a work log in notepad or JIRA
+ Rebase your master from origin
+ Create your branch if this is a new issue, or open the branch if it's already in your forked repository
+ Rebase your branch from your master
+ Solve the issue
+ Add your files
+ Commit your work with a short phrase like "Implemented Foo to Bar"
+ Push your branch upstream to origin
+ Submit your work log
+ Push your issue to peer-review
