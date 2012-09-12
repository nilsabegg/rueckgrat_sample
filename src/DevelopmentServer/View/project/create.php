<ul class="breadcrumb">
  <li><a href="#">Projects</a> <span class="divider">/</span></li>
  <li class="active">Create Project</li>
</ul>
<form class="form-horizontal">
    <fieldset class="well">
        <legend>Project</legend>
        <div class="control-group">
          <label class="control-label" for="inputEmail">Title:</label>
          <div class="controls">
            <input type="text" id="input-title" placeholder="Sample Project">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">Development URL:</label>
          <div class="controls">
            <input type="text" id="input-development-url" placeholder="http://dev.sample-project.com">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">Production URL:</label>
          <div class="controls">
            <input type="text" id="input-production-url" placeholder="http://sample-project.com">
          </div>
        </div>
    </fieldset>

    <fieldset class="well">
        <legend>Database</legend>
        <div class="control-group">
          <label class="control-label" for="inputJenkins">Add Service</label>
          <div class="controls">
            <select id="input-services">
                <option val="1">Development</option>
                <option val="2">Production</option>
            </select>
            <button type="submit" class="btn">Add</button>
          </div>
        </div>
    </fieldset>
    <fieldset class="well">
        <legend>Services</legend>
        <div class="control-group">
          <label class="control-label" for="inputJenkins">Add Service</label>
          <div class="controls">
            <select id="input-services">
                <option val="1">Jenkins</option>
                <option val="2">Gitlab</option>
            </select>
            <button type="submit" class="btn">Add</button>
          </div>
        </div>
    </fieldset>
    <hr>
    <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn">Create Project</button>
      </div>
    </div>

</form>
